<?php
/**
 * Hello controller.
 *
 * @copyright (c) 2016 Tomasz Chojna
 * @link http://epi.chojna.info.pl
 */
namespace Controller;

use Silex\Api\ControllerProviderInterface;
use Silex\Application;
use Symfony\Component\HttpFoundation\Request;

/* Używane zamiast

$app->get(
    '/hello/{name}',
    function ($name) use ($app) {
        return $app['twig']->render(
            'hello/index.html.twig',
            ['name' => $name]
        );
    }
);

z index.php */


/**
 * Class HelloController.
 *
 * @package Controller
 */
class HelloController implements ControllerProviderInterface
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
        // definiujemy jakiemu kawałkowi ścieżki odpowiada jaka akcja
        $controller = $app['controllers_factory'];
        $controller->get('/{name}', [$this, 'indexAction']);

        return $controller;
    }

    /**
     * Index action.
     *
     * @param \Silex\Application                        $app     Silex application
     * @param \Symfony\Component\HttpFoundation\Request $request Request object
     *
     * @return string Response
     */
    public function indexAction(Application $app, Request $request)
    {
        $name = $request->get('name', ''); // (nazwa zmiennej, co się ma stać jak nie znajdę)

        return $app['twig']->render('hello/index.html.twig', ['name' => $name]);
    }
}
