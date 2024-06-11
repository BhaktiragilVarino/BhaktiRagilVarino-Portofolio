<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;
use CodeIgniter\Filters\CSRF;
use CodeIgniter\Filters\DebugToolbar;
use CodeIgniter\Filters\Honeypot;
use CodeIgniter\Filters\InvalidChars;
use CodeIgniter\Filters\SecureHeaders;

class Filters extends BaseConfig
{
    /**
     * Configures aliases for Filter classes to
     * make reading things nicer and simpler.
     *
     * @var array
     */
    public $aliases = [
        'csrf'          => \CodeIgniter\Filters\CSRF::class,
        'toolbar'       => \CodeIgniter\Filters\DebugToolbar::class,
        'honeypot'      => \CodeIgniter\Filters\Honeypot::class,
        'InvalidChars' => \CodeIgniter\Filters\InvalidChars::class,
        'SecureHeaders' => \CodeIgniter\Filters\SecureHeaders::class,
        'Filter_auth'   => \App\Filters\Filter_auth::class,
    ];

    /**
     * List of filter aliases that are always
     * applied before and after every request.
     *
     * @var array
     */
    public $globals = [
        'before' => [
            'Filter_auth' => ['except' => [
                'auth', 'auth/*', '/',
                'lp', 'lp/*', '/'
            ]]
            // 'honeypot',
            // 'csrf',
            // 'invalidchars',
        ],
        'after' => [
            'Filter_auth' => ['except' => [
                'home', 'home/*',
                'about', 'about/*',
                'achiev', 'achiev/*',
                'education', 'education/*',
                'workexperience', 'workexperience/*',
                'pesan', 'pesan/*',
                'project', 'project/*',
                'technologysuite', 'technologysuite/*',
                'user', 'user/*',
                'pengaturan', 'pengaturan/*'
            ]]
        ],
        'beetwen' => [
            'Filter_auth' => ['except' => [
                'auth', 'auth/*', '/',
                'lp', 'lp/*', '/'
            ]]
        ],
        'toolbar',
        // 'honeypot',
        // 'secureheaders',

    ];

    /**
     * List of filter aliases that works on a
     * particular HTTP method (GET, POST, etc.).
     *
     * Example:
     * 'post' => ['foo', 'bar']
     *
     * If you use this, you should disable auto-routing because auto-routing
     * permits any HTTP method to access a controller. Accessing the controller
     * with a method you don’t expect could bypass the filter.
     *
     * @var array
     */
    public $methods = [];

    /**
     * List of filter aliases that should run on any
     * before or after URI patterns.
     *
     * Example:
     * 'isLoggedIn' => ['before' => ['account/*', 'profiles/*']]
     *
     * @var array
     */
    public $filters = [];
}
