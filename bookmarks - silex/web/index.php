<?php
/**
 * Comment put here...
 */
ini_set('error_reporting', E_ALL);
ini_set('display_errors', true);

require_once dirname(dirname(__FILE__)).'/vendor/autoload.php';

$app = new Silex\Application();
$app['debug'] = true;

use Model\Bookmarks\Arr\Bookmarks;

$bookmarksModel = new Bookmarks();

$app->get(
    '/',
    function () use ($app) {
        return '';
    }
);

$app->get(
    '/bookmarks/',
     function () use ($app, $bookmarksModel) {
       var_dump($bookmarksModel->findAll());

       return '';
    }
);

$app->get(
    '/bookmarks/{id}',
    function ($id) use ($app, $bookmarksModel) {
        $bookmark = $bookmarksModel ->findOneById($id);
        if (!$bookmark || !count($bookmark)) {
            $app->abort('404');
        } else {
            var_dump($bookmark);

            return '';
        }
    }
);

$app->run();