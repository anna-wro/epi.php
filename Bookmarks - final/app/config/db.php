<?php
use Silex\Provider\DoctrineServiceProvider;
$app->register(
    new DoctrineServiceProvider(),
    array(
        'db.options' => array(
            'driver'    => 'pdo_mysql',
            'host'      => 'localhost',
            'dbname'    => 'student',
            'user'      => 'student',
            'password'  => 'student123',
            'charset'   => 'utf8',
            'driverOptions' => array(
                1002 => 'SET NAMES utf8',
            ),
        ),
    )
);