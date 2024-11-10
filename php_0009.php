<?php
//Write a PHP program that defines two string variables and print whether the strings are equal, greater, or less than each other.
// Defining two string variables
$string1 = "Hello";
$string2 = "World";

// Printing the original strings
echo "String 1: " . $string1 . "<br>";

echo "String 2: " . $string2 . "<br>";


echo "\nUsing comparison operators: <br>";
if($string1 == $string2) {
    echo "The strings are equal\n";
} elseif($string1 > $string2) {
    echo "String 1 is greater than String 2\n";
} else {
    echo "String 1 is less than String 2\n";
}

?>