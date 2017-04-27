<?php
/**
 * Comment put here...
 */
ini_set('error_reporting', E_ALL);
ini_set('display_errors', true);

require_once dirname(dirname(__FILE__)) . '/vendor/autoload.php';
require_once dirname(dirname(__FILE__)) . '/src/templates/templates.inc.php';

$app = new Silex\Application();
$app['debug'] = true;

use Model\Bookmarks\Arr\Bookmarks;

$bookmarksModel = new Bookmarks();
$view = [];

$app->get(
    '/',
    function () use ($app) {
        return '';
    }
);

$app->get(
    '/bookmarks/',
    function () use ($app, $bookmarksModel, $view) {
        $view['title'] = 'bookmarks';
        $view['template'] = 'index';
        $view['bookmarks'] = $bookmarksModel->findAll();
        render($view);

        return '';
    }
);

$app->get(
    '/bookmarks/{id}',
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