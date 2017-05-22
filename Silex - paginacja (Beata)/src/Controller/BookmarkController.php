<?php
/**
 * Bookmark controller.
 *
 * @copyright (c) 2016 Tomasz Chojna
 * @link http://epi.chojna.info.pl
 */
namespace Controller;

use Model\Bookmarks\Csv\Bookmarks;
use Silex\Application;
use Silex\Api\ControllerProviderInterface;
use Symfony\Component\HttpFoundation\Request;

/**
 * Class HelloController.
 *
 * @package Controller
 */
class BookmarkController implements ControllerProviderInterface
{
    /**
     * Routing settings.
     *
     * @param \Silex\Application $app Silex application
     *
     * @return \Silex\ControllerCollection Result
     */
//    public function connect(Application $app)
//    {
//        $controller = $app['controllers_factory'];
//        $controller->get('/', [$this, 'indexAction']);
//        $controller->get('/{id}', [$this, 'singleBookmark']);
//
//        return $controller;
//    }

    public function connect(Application $app)
    {
        $controller = $app['controllers_factory'];
        $controller->get('/', [$this, 'indexAction'])->bind('bookmark_index');
        $controller->get('/{id}', [$this, 'singleBookmark'])->bind('bookmark_view');

        return $controller;
    }

    public function indexAction(Application $app)
    {
        $bookmarkModel = new Bookmarks();

        return $app['twig']->render(
            'bookmark/index.html.twig',
            ['bookmarks' => $bookmarkModel->findAll()]
        );
    }

    public function singleBookmark(Application $app, Request $request)
    {
        $id = $request->get('id', '');
        $bookmarkModel = new Bookmarks();

        return $app['twig']->render(
            'bookmark/view.html.twig',
            ['bookmark' => $bookmarkModel->findOneById($id),
                'bookmarkId' => $id]
        );
    }
}