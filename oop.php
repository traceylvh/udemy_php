<?php
include 'classes/car.php';

//create car objects
//"instantiating the object"
$car1 = new Car('Mazda','3','grey');

echo $car1->getColor();

$car2 = new Car('VW','Bug','electric blue');

echo $car2->getColor();


// $car1->make = 'Toyota';
// $car1->make = 'Honda'; //this overrides previous

//this only works with public properties
// echo $car1->make.'<br />';

// $car1->start();
// $car1->setMake('Mazda');
// echo $car1->getMake();




 ?>
