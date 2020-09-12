<?php

# Display Errors
error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_alter('display_startup_errors', TRUE);

require 'Classe/ClassOne.php';
require 'Classe/ClassTwo.php';

use Classe\ClassOne;
use Classe\ClassTwo;

# ClassOne

$first = new ClassOne();
$first->private1 = 'Private obj1';
$first->get = ['try' => 'access'];
$first->private2 = 'Private obj2';


var_dump($first->private1);
var_dump($first->private2);
var_dump($first->get);


# ClassTwo

$second = new ClassTwo();
# Set
//$planet = $second->data['mass'] = 22;
# Unset
//unset($second->data);
# Isset
//echo isset($second->data) ? 'true' : 'false';
//var_dump($second->data);
echo "<br>";


echo $second->hasMass('fdsfds');

try {

    $second->setPlanet('3232');
    echo $second->getPlanet();
} catch (Exception $e) {
    echo $e->getMessage();
}