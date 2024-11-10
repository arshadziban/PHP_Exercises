<?php
// Write a PHP script that defines a variable outside a function and another inside the function, then demonstrate how the variables can be accessed inside and outside the function, explaining the scope difference.
//define local variable
$globalVar = "global_val";

function testScope() {
  
    $localVar = "local_val";
    echo "Inside function, Local val: $localVar <br>"; 
    echo " Inside function, Global val: " . $GLOBALS['globalVar'] . "<br>"; 
}

//call function
testScope();