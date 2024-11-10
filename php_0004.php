<?php
//Define a constant for the value of л (3.1416). Write a PHP program that calculates and prints the area and circumference of a circle with a radius of 5, using this constant.
define(constant_name: 'PI', value: 3.1416);
$radius = 5;
$area = PI * $radius * $radius;
$circumference = 2 * PI * $radius;
echo "Area of the circle: $area<br>";
echo " Circumference of the circle: $circumference<br>";
