<?php
/**
 * Comment put here...
 */
ini_set('error_reporting', E_ALL);
ini_set('display_errors', true);

require_once dirname(dirname(__FILE__)).'/vendor/autoload.php';

$app = new Silex\Application();
$app['debug'] = true;

// configuration and code goes here...

$app->run();