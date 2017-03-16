<?php
/**
 * GET request handler.
 *
 * @link http://epi.chojna.info.pl
 * @author EPI UJ <epi@uj.edu.pl>
 * @copyright (c) 2017
 */

require dirname(__FILE__).'/debug.inc.php';

$pattern = ['imie', 'nazwisko'];

$data = [];

foreach ($pattern as $key) {
    $data[$key] = (isset($_GET[$key])) ? $_GET[$key] : '';
}

$name = $data['imie'].' '.$data['nazwisko'];

if ('' === trim($name)) {
    $name = 'Nieznajoma/y';
}

echo 'Witaj '.$name.'!';