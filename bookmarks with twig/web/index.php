<?php
/**
 * Comment put here...
 */
ini_set('error_reporting', E_ALL);
ini_set('display_errors', true);

require_once dirname(dirname(__FILE__)).'/vendor/autoload.php';
require_once dirname(dirname(__FILE__)).'/src/templates/templates.inc.php';

use Silex\Application;
use Silex\Provider\AssetServiceProvider;
use Silex\Provider\TwigServiceProvider;
use Model\Bookmarks\Arr\Bookmarks;

$app = new Silex\Application();
$app['debug'] = true;
$app->register(
    new TwigServiceProvider(),
    [
        'twig.path' => dirname(dirname(__FILE__)).'/templates',
    ]
);

$bookmarksModel = new Bookmarks();
$view = [];

$app->get(
    '/',
    function () use ($app) {
        return '';
    }
);

$app->get(
    '/hello/{name}',
    function ($name) use ($app) {
        return $app['twig']->render(
            'hello/index.html.twig', // nazwa szablonu
            ['name' => $name] // tablice parametrow przekazywanych do silnika szablonow
        );
    }
);

$app->get(
    '/bookmark/',
    function () use ($app, $bookmarksModel, $view) {
        return $app['twig']->render(
            'bookmark/index.html.twig',
            ['bookmarks' => $bookmarksModel->findAll()]
        );
    }
);

$app->get(
    '/bookmark/{id}',
    function ($id) use ($app, $bookmarksModel, $view) {
        $bookmark = $bookmarksModel->findOneById($id);
        if (!$bookmark || !count($bookmark)) {
            $view['title'] = 'Bookmark not found!';
            $view['template'] = '404';
            render($view);

            return '';
        } else {
            $view['title'] = 'bookmark';
            $view['template'] = 'view';
            $view['bookmark'] = $bookmark;
            render($view);

            return '';
        }
    }
);

$app->run();
