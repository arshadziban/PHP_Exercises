<?php
//Write a PHP program that takes a number and uses the ternary operator to check if the number is positive, negative, or zero. Display the appropriate message based on the
// Define the number to check
$number = -5; // You can change this number to test different cases


$result = ($number > 0) ? "The number is positive." : (($number < 0) ? "The number is negative." : "The number is zero.");


echo $result;
?>
