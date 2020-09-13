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
$first->city = 'Zagreb';
$first->postal = 10000;

echo $first->city . '<br>';
echo $first->postal . '<br>';



echo "<br> <hr> <br>";

# ClassTwo
$second = new ClassTwo();
# Check
# Set
//$planet = $second->data['mass'] = 22;
# Unset
//unset($second->data);
# Isset
//echo isset($second->data) ? 'true' : 'false';
//var_dump($second->data);

try {
    var_dump($second->data);
    $second->SETplanet('Donald Trump');
    $second->setVolume(123456789);
    echo 'Planet  ' . $second->getPlanet() . "<br>";
    echo 'Volume ' . $second->getVolume() . "<br>";
    echo 'Has ' . $second->hasMass() . "<br>";
    $second->unsPlanet();
    $second->unsMass();
    $second->unsVolume();
    var_dump($second->data) . "<br>";
} catch (Exception $e) {
    echo $e->getMessage();
}