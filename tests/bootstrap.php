<?php
/*
 * Set error reporting to the max level.
 */
error_reporting(-1);

/*
 * Set UTC timezone.
 */
date_default_timezone_set('UTC');

$autoloader = __DIR__ . '/../vendor/autoload.php';

/*
 * Check that composer installation was done.
 */
if (!file_exists($autoloader)) {
    throw new Exception(
        'Please run "composer install" in root directory to setup unit test dependencies before running the tests'
    );
}

// Include the Composer autoloader.
require_once $autoloader;

if (!file_exists(__DIR__ .'/.env')) {
    copy(__DIR__ .'/.env.example', __DIR__ .'/.env');
}

$dotenv = new \Dotenv\Dotenv(__DIR__);
$dotenv->load();

/*
 * Unset global variables that are no longer needed.
 */
unset($autoloader);