<?php
//Write a PHP program that takes a sentence as input, counts the number of words, and outputs the result.
$val = "I love coding";
$wordCount = str_word_count($val);
echo "Number of words : $wordCount<br>";