<?php
//Animals/Dog.php

namespace Animals;

require_once dirname(__FILE__).'/Animal.php';

class Dog extends Animal
{
    public function __construct($name)
    {
        parent::__construct($name);
    }

    public function bark()
    {
        echo 'Woof woof!';
    }
}