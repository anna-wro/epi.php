<?php
/**
 * Comment put here...
 */
ini_set('error_reporting', E_ALL);
ini_set('display_errors', true);

require_once dirname(dirname(__FILE__)).'/vendor/autoload.php';

$app = new Silex\Application();
$app['debug'] = true;

// dla pustego geta
$app->get(
    '/',
    function () use ($app) {
        return '';
    }
);

// gdy nie podamy imienia
$app->get(
    '/hello/',
    function () use ($app) {
        $app->abort('404!');
    }
);

$app->get(
    '/hello/{name}',
    function ($name) use ($app) {
        return 'Hello '.$app->escape($name);
    }
);

$app->get(
    '/{message}/{name}',
    function ($name, $message) use ($app) {
        return $app->escape($message)." ".$app->escape($name);
    }
);

$app->run();