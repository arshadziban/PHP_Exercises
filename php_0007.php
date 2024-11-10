<?php
//Write a PHP program that takes a string and prints:
//The length of the string.
//The string in uppercase and lowercase.
//A substring from the second character to the fifth character.
$str = "Programming";

echo "Length of the string: " . strlen($str) . "<br>";
echo "Uppercase: " . strtoupper($str) . "<br>";
echo "Lowercase: " . strtolower($str) . "<br>";
echo "Substring (2nd to 5th character): " . substr($str, 1, 4) ;