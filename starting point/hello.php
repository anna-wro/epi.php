<?php

ini_set('error_reporting', E_ALL);
ini_set('display_errors', true);

$name = 'World';
if (isset($_GET['name'])) {
    $name = $_GET['name'];
} else {
    $name = 'World';
}

$name = isset($_GET['name'])
        ? $_GET['name'] : 'World';

echo 'Hello '.$name.'!';
