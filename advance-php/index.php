<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include 'Cookie.php';

$cookie = new Cookie();

$cookie->set('name', 'Ramesh');

$cookie_name = $cookie->get('name');

$cookie->delete('name');
//echo $cookie_name;

//print_r($cookie);

/**
 * Muti Array dimetna
 */
$cars = [
    ["Volvo", ['tolvo'], 18],
    ["BMW", 15, 13],
    ["Saab", 5, 2],
    ["Land Rover", 17, 15]
];

///echo '<pre>';
//print_r($cars[0][1][0]);
