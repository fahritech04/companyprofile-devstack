<?php
/**
 * Ensure test user exists with known verified credentials.
 * Delete after use.
 */
if (!defined('FCPATH')) {
    define('FCPATH', __DIR__ . DIRECTORY_SEPARATOR . 'public' . DIRECTORY_SEPARATOR);
}
require __DIR__ . '/vendor/autoload.php';
$paths = new Config\Paths();
require $paths->systemDirectory . '/Boot.php';
CodeIgniter\Boot::bootSpark($paths);

$userModel = new \App\Models\User();
$email = 'smoketest@example.com';
$pass  = 'Secret123!Xy';

$user = $userModel->where('email', $email)->first();
if ($user) {
    $userModel->update($user['id'], [
        'password'              => $pass,      // hashed by beforeUpdate
        'email_verified_at'     => date('Y-m-d H:i:s'),
        'is_active'             => 1,
        'failed_login_attempts' => 0,
        'locked_until'          => null,
        'verification_token'    => null,
    ]);
    echo "Reset existing user id=" . $user['id'] . "\n";
} else {
    $id = $userModel->insert([
        'username'          => 'smoketest',
        'email'             => $email,
        'password'          => $pass,
        'first_name'        => 'Smoke',
        'last_name'         => 'Test',
        'is_active'         => 1,
        'email_verified_at' => date('Y-m-d H:i:s'),
    ], true);
    echo "Created user id=$id\n";
}
echo "DONE\n";
