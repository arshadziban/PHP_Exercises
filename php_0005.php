<?php
//Write a PHP program to swap the values of two variables without using a third variable and print the results.
$a = 5;
$b = 10;


echo "Before swapping: a = $a and b = $b <br>";

// Swapping
$a = $a + $b;
$b = $a - $b;
$a = $a - $b;


echo "After swapping: a = $a, b = $b<br>";
?>s