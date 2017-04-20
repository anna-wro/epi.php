<?php

function __autoload($class)
{
    $path = preg_replace('/\\\/', '/', $class);
    require_once dirname(__FILE__).'/'.$path.'.php';
}

use Animals\Dog;
use Animals\Cat;

$dog = new Dog('Admiral');
echo $dog->getName()."\n";

$cat = new Cat('Carmel');
$cat->getName()."\n";