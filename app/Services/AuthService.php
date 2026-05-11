<?php

namespace App\Services;

use App\Models\User;

/**
 * Central place for authentication-related security concerns:
 *  - cryptographic verification tokens (with expiry)
 *  - account lockout / failed-attempt counting
 *  - password policy validation
 *  - login audit (IP, last-login time)
 *
 * Controllers stay thin; policy lives here so it can be unit-tested and reused.
 */
class AuthService
{
    /** Default verification-token TTL in hours. */
    public const VERIFICATION_TTL_HOURS = 24;

    /** Number of failed login attempts before an account is temporarily locked. */
    public const MAX_FAILED_ATTEMPTS = 5;

    /** Lockout duration (minutes) after MAX_FAILED_ATTEMPTS is reached. */
    public const LOCKOUT_MINUTES = 15;

    protected User $users;

    public function __construct(?User $users = null)
    {
        $this->users = $users ?? new User();
    }

    // ─────────────────────────────────────────────────────────────
    // Verification tokens
    // ─────────────────────────────────────────────────────────────

    /**
     * Generate a cryptographically random token, persist it with an expiry,
     * and return it so the caller can send it via email.
     */
    public function issueVerificationToken(int $userId): string
    {
        $token = bin2hex(random_bytes(32)); // 64 chars
        $expires = (new \DateTimeImmutable('now'))
            ->modify('+' . self::VERIFICATION_TTL_HOURS . ' hours')
            ->format('Y-m-d H:i:s');

        $this->users->update($userId, [
            'verification_token'            => $token,
            'verification_token_expires_at' => $expires,
        ]);

        return $token;
    }

    /**
     * Validate a token and, if valid and unexpired, mark the matching user as verified.
     * Returns the user array on success, or null on failure.
     */
    public function consumeVerificationToken(string $token): ?array
    {
        // Only accept hex tokens of the expected length — rejects legacy email-as-token links.
        if (!preg_match('/^[a-f0-9]{64}$/', $token)) {
            return null;
        }

        $user = $this->users->where('verification_token', $token)->first();
        if (!$user) {
            return null;
        }

        // Expiry check
        if (!empty($user['verification_token_expires_at'])) {
            $expiresAt = strtotime($user['verification_token_expires_at']);
            if ($expiresAt !== false && $expiresAt < time()) {
                return null;
            }
        }

        $this->users->update($user['id'], [
            'email_verified_at'             => date('Y-m-d H:i:s'),
            'verification_token'            => null,
            'verification_token_expires_at' => null,
        ]);

        return $this->users->find($user['id']);
    }

    // ─────────────────────────────────────────────────────────────
    // Account lockout
    // ─────────────────────────────────────────────────────────────

    /**
     * True if the user is currently locked (locked_until is in the future).
     */
    public function isLocked(array $user): bool
    {
        if (empty($user['locked_until'])) {
            return false;
        }
        return strtotime($user['locked_until']) > time();
    }

    /**
     * Seconds remaining on the current lockout (0 if not locked).
     */
    public function lockoutSecondsRemaining(array $user): int
    {
        if (!$this->isLocked($user)) {
            return 0;
        }
        return max(0, strtotime($user['locked_until']) - time());
    }

    /**
     * Record a failed login: increment counter, lock account if threshold reached.
     */
    public function recordFailedAttempt(array $user): void
    {
        $attempts = (int) ($user['failed_login_attempts'] ?? 0) + 1;
        $update   = ['failed_login_attempts' => $attempts];

        if ($attempts >= self::MAX_FAILED_ATTEMPTS) {
            $update['locked_until'] = (new \DateTimeImmutable('now'))
                ->modify('+' . self::LOCKOUT_MINUTES . ' minutes')
                ->format('Y-m-d H:i:s');
        }

        $this->users->update($user['id'], $update);
    }

    /**
     * Clear counters and stamp a successful login.
     */
    public function recordSuccessfulLogin(array $user, ?string $ip = null): void
    {
        $this->users->update($user['id'], [
            'failed_login_attempts' => 0,
            'locked_until'          => null,
            'last_login_at'         => date('Y-m-d H:i:s'),
            'last_login_ip'         => $ip,
        ]);
    }

    // ─────────────────────────────────────────────────────────────
    // Password policy
    // ─────────────────────────────────────────────────────────────

    /**
     * Validate complexity rules. Returns list of human-readable error strings;
     * empty array means the password passed.
     */
    public function validatePasswordPolicy(string $password): array
    {
        $errors = [];

        if (strlen($password) < 8) {
            $errors[] = 'Password must be at least 8 characters.';
        }
        if (strlen($password) > 128) {
            $errors[] = 'Password must be 128 characters or less.';
        }
        if (!preg_match('/[A-Z]/', $password)) {
            $errors[] = 'Password must contain at least one uppercase letter.';
        }
        if (!preg_match('/[a-z]/', $password)) {
            $errors[] = 'Password must contain at least one lowercase letter.';
        }
        if (!preg_match('/[0-9]/', $password)) {
            $errors[] = 'Password must contain at least one digit.';
        }
        if (!preg_match('/[^A-Za-z0-9]/', $password)) {
            $errors[] = 'Password must contain at least one symbol.';
        }

        return $errors;
    }
}
