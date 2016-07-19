<?php
$x = 'hello';
$y = 'world';
echo $x.' '.$y;

$cars = array('Cadillacs', 'Lincolns', 'Mercuries', 'Subaru');
echo '<br />'.$cars[2].'<br />';

foreach ($cars as $car) {
  echo $car.'<br />';
};

echo '<br /><br />';

//associative array 

$mycar = array('make' => 'Mazda', 'model' => '3', 'color' => 'black');
echo $mycar['make'];

echo '<br /><br />';

foreach ($mycar as $key => $value) {
  echo ucwords($key).': '.$value.'<br />';
};
 ?>
