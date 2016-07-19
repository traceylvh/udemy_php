<?php
function sayHello(){
  echo 'Hello';
}

sayHello();

function sayIt($word){
  echo $word;
}

sayIt('<p>Welcome to this place.</p>');

function sayThis($word1, $word2){
  echo $word1.' '.$word2;
}

sayThis('<p>In your', 'ear.</p>');

// create default parameter
function sayThat($word1, $word2 = 'the what'){
  echo $word1.' '.$word2;
}

//no error if no second argument, but this will override default
sayThat('<p>WAAHT</p>', 'the butt');

//simple math
function add($num1, $num2){
  echo '<br />Echo inside of function :( '.($num1 + $num2);
}

add(7, 9);

//you don't usually want to echo from inside a function
//use return and echo from the function call
function addLater($num3, $num4){
  return '<br />Echo outside of function '.($num3 + $num4);
}

echo addLater(3, 4);

//how to include functions from another file
include 'incSample.php';

echo addInclude(3, 4);

//can also use 'require' or 'require_once' in place of 'include'
//include: if it can't find it, the rest of the script will go on
//require: if it can't find it, the rest of the script will STOP



?>
