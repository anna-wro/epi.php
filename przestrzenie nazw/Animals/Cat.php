<?php
//Animals/Cat.php

namespace Animals;

require_once dirname(__FILE__).'/Animal.php';

class Cat extends Animal
{
    public function __construct($name)
    {
        parent::__construct($name);
    }

    public function meow()
    {
        echo 'Meow...';
    }
}