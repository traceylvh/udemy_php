<?php
echo '<h1>Conditionals and Regular Expressions</h1><h2>Conditionals</h2>';
echo '<h4>If Else</h4>';

$x = 1;
if($x > 2){
  echo $x.' is greater than 2.';
} else {
  echo $x.' is NOT greater than 2.';
}

echo '<br />';

$n = 3;
if($n > 2 && $n < 10){
  echo $n.' is greater than two and less than 10.';
} else {
  echo $n.' is not between two and 10.';
}

echo '<br />';

$t = 3;
if($t == 5) {
  echo $t.' is 5.';
} elseif($t == 2) {
  echo $t.' is 2.';
} else {
  echo $t.' is not 2 or 5.';
}

echo '<h4>Switch Case</h4>';

$s = 4;
switch($s){
  case 3:
    echo $s.' is 3.';
    break;
  case 2:
    echo $s.' is 2.';
    break;
  default:
    echo $s.' is not 2 or 3.';
    break;
}

echo '<h2>Regular Expressions</h2>';
//used to match something against something else
//webcheatsheet.com/php/regular_expressions.php

echo '<h4>preg_match</h4>';

if (preg_match('/ell/', 'Hello World', $matches)){
  echo 'Match was found <br />';
  echo $matches[0];
}

if (preg_match('/[Hed]/', 'Hello World', $matches)){
  echo '<br />Match was found <br />';
  echo $matches[0];
}

 ?>
