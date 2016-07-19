<?php

echo '<h4>string replace</h4>';

//string replace
$phrase = '<p>I like to eat apples.</p>';

// arguments:
// 1. what to replace
// 2. what to replace with
// 3. actual string (in variable)
$phrase = str_replace('apples', 'oranges', $phrase);

echo $phrase;

//print_r - print an array into the browser

echo '<h4>implode - put array into string </h4>';

//implode - convert array to string
//takes 2 parameters (arguments):
//1. what to separate the items with
//2. the array
$name_array = array('tracey','phin','peter','gus');
print_r($name_array);
$name_string = implode(', ', $name_array);
echo '<br />'.$name_string;

echo '<h4>explode - put string into array </h4>';

//explode - convert string into an array
//takes 2 parameters
//1. what separates the items
//2. the string variable
$car_string = 'cadillacs, lincolns, mercury, subaru, Blondie, Rapture';
$car_array = explode(',',$car_string);
print_r($car_array);

echo '<h4>ucwords - capitalize each word </h4>';
echo ucwords($name_string);

echo '<h4>strtolower - lowercase each word </h4>';
echo strtolower($car_string);

echo '<h4>count - count items in an array</h4>';
echo count($car_array);

echo '<h4>sort - sort array items in alpha order </h4>';
sort($name_array);
print_r($name_array);

 ?>
