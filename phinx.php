<?php
/**
 * Phinx config file.
 *
 * @license GPLv3
 *         
 * @since 6.2.10
 * @package eduTrac SIS
 * @author Joshua Parker <joshmac3@icloud.com>
 */

date_default_timezone_set('UTC');

/**
 * If you are installing on a development server such
 * as WAMP, MAMP, XAMPP or AMPPS, you might need to
 * set DB_HOST to 127.0.0.1 instead of localhost.
 */
 
// check if environment variables are set and if so define local variables to the value of the environment

if (getenv('DB_HOST' !== false) == false)
        {
                define('DB_HOST', getenv('DB_HOST')); // MySQL server host.
        }
else
        {
                define('DB_HOST', 'localhost');
        }
if (getenv('DB_NAME' !== false) == false)
        {
                define('DB_NAME', getenv('DB_NAME')); // MySQL server database name.
        }
else
        {
                define('DB_NAME', 'databasename');
        }
if (getenv('DB_USER' !== false) == false)
        {
                define('DB_USER', getenv('DB_USER')); // MySQL server username.
        }
else
        {
                define('DB_USER', 'user');
        }
if (getenv('DB_PASS_FILE' !== false) == false)
        {
                define('DB_PASS', file_get_contents(getenv('DB_PASS_FILE'))); // MySQL password in file.
        }
elseif (getenv('DB_PASS' !== false) == false)
        {
                define('DB_PASS', getenv('DB_PASS')); // MySQL server password.
        }
else
        {
                define('DB_PASS', 'myPassword');
        }
if (getenv('DB_PORT' !== false) == false)
        {
                define('DB_PORT', getenv('DB_PORT')); // MySQL server host.
        }
else
        {
                define('DB_PORT', '3360');
        }


return [
    "paths" => [
        "migrations" => "app/migrations"
    ],
    "environments" => [
        "default_migration_table" => "migrations",
        "default_database" => "production",
        "production" => [
            "adapter" => "mysql",
            "host" => DB_HOST,
            "name" => DB_NAME,
            "user" => DB_USER,
            "pass" => DB_PASS,
            "charset" => 'utf8mb4',
            "collation" => 'utf8mb4_unicode_ci',
            "port" => DB_PORT
        ]
    ]
];
