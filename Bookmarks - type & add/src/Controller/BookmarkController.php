<?php
/**
 * Bookmark controller.
 *
 * @copyright (c) 2016 Tomasz Chojna
 * @link http://epi.chojna.info.pl
 */

namespace Controller;

use Model\Bookmarks\Csv\Bookmarks;
use Repository\BookmarkRepository;
use Silex\Application;
use Silex\Api\ControllerProviderInterface;
use Symfony\Component\HttpFoundation\Request;
use Form\BookmarkType;

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

    public function connect(Application $app)
    {
        $controller = $app['controllers_factory'];
        $controller->get('/', [$this, 'indexAction'])->bind('bookmark_index');
        $controller->get('/page/{page}', [$this, 'indexAction'])
            ->value('page', 1)
            ->bind('bookmark_index_paginated');
        $controller->get('/{id}', [$this, 'viewAction'])
            ->assert('id', '[1-9]\d*')
            ->bind('bookmark_view');
        $controller->match('/add', [$this, 'addAction'])
            ->method('POST|GET')
            ->bind('bookmark_add');
        return $controller;
    }


    /**
     * Index action.
     *
     * @param \Silex\Application $app  Silex application
     * @param int                $page Current page number
     *
     * @return \Symfony\Component\HttpFoundation\Response HTTP Response
     */
    public function indexAction(Application $app, $page = 1)
    {
        $bookmarkRepository = new BookmarkRepository($app['db']);

        return $app['twig']->render(
            'bookmark/index.html.twig',
            ['paginator' => $bookmarkRepository->findAllPaginated($page)]
        );
    }

    /**
     * View action.
     *
     * @param \Silex\Application $app Silex application
     * @param string             $id  Element Id
     *
     * @return \Symfony\Component\HttpFoundation\Response HTTP Response
     */
    public function viewAction(Application $app, $id)
    {
        $bookmarkRepository = new BookmarkRepository($app['db']);

        return $app['twig']->render(
            'bookmark/view.html.twig',
            ['bookmark' => $bookmarkRepository->findOneById($id),
                'bookmarkId' => $id]
        );
    }

    public function addAction(Application $app, Request $request)
    {
        $bookmark = [];

        $form = $app['form.factory']->createBuilder(BookmarkType::class, $bookmark)->getForm();
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $bookmarkRepository = new BookmarkRepository($app['db']);
            $bookmarkRepository->save($form->getData());
        }

        return $app['twig']->render(
            'bookmark/add.html.twig',
            [
                'bookmark' => $bookmark,
                'form' => $form->createView(),
            ]
        );
    }
}