<?php
/**
 * Array examples
 *
 * @link http://epi.chojna.info.pl
 * @author EPI UJ <epi@uj.edu.pl>
 * @copyright (c) 2017
 */

require dirname(__FILE__).'/debug.inc.php';

$tab = array();
$tab = [];

$tab = array('apple', 'orange');
$tab[] = 'banana';
$tab[77] = 'plum'; // elementy miedzy 3 a 76 nie istnieja
var_dump($tab);
var_dump(count($tab)); // liczba elementow w tablicy

foreach ($tab as $item) {
    echo $item."\n";
}

foreach ($tab as $key => $value) {
    echo $key.' : '.$value."\n";
}

foreach ($tab as $key => $value) {
    $tab[$key] = $tab[$key].'!';
}
var_dump($tab);

foreach ($tab as $item) {
    $item.='!';
}
unset($item);   // wazne, zaraz za petla, zeby nie napisac ostatniego elementu tablicy
var_dump($tab);

$person = array();
$person['name'] = 'Mark';
echo $person['name']."<br>";
$key = 'name';
echo $person[$key]."<br><br>";

$person = [
    'name' => 'Mark',
    'surname' => 'Brown',
    'age' => '21',  // nawet ostatni element konczy sie przecinkiem
];

foreach ($person as $key => $value) {
    echo $key.': '.$value."<br>";
}

$persons = array(
    array(
        'name' => 'Mark',
        'surname' => 'Brown',
        'age' => '21',
    ),
    array(
        'name' => 'John',
        'surname' => 'Doe',
        'age' => '22',
    ),
    array(
        'name' => 'Ann',
        'surname' => 'Smith',
        'age' => '18',
    ),
);

//if ('' === $_GET['imie']) {
//}

foreach ($persons as $person) {
    foreach ($person as $item) {
        echo $item.' ';
    }
    echo '<br>';
};

