<?php

namespace Config;

use App\Services\AuthService;
use App\Services\WebsiteService;
use CodeIgniter\Config\BaseService;

/**
 * Services Configuration file.
 *
 * Services are simply other classes/libraries that the system uses
 * to do its job. This is used by CodeIgniter to allow the core of the
 * framework to be swapped out easily without affecting the usage within
 * the rest of your application.
 */
class Services extends BaseService
{
    /**
     * Authentication service (verification tokens, lockout, password policy).
     *
     * Usage: service('auth')->issueVerificationToken($userId);
     */
    public static function auth(bool $getShared = true): AuthService
    {
        if ($getShared) {
            return static::getSharedInstance('auth');
        }

        return new AuthService();
    }

    /**
     * Website builder service (ownership checks, template registry integration).
     *
     * Usage: service('website')->createForUser($userId, $name, $template);
     */
    public static function website(bool $getShared = true): WebsiteService
    {
        if ($getShared) {
            return static::getSharedInstance('website');
        }

        return new WebsiteService();
    }
}
