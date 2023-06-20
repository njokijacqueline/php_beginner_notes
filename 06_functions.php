<?php
/* ------------ Functions ----------- */

/*
  Functions are reusable blocks of code that we can call to perform a specific task.
  We can pass values into functions to change their behavior. Functions have their own local scope as opposed to global scope.


/*
** Function Syntax
  function functionName($arg1, $arg2, ...) {
    // code to be executed
  }
*/
function helloMessage(){
  echo "This is a message<br>";
}
helloMessage();

function addingFunction($num1, $num2){
  $sum=$num1+$num2;
  echo "print $sum";
}
addingFunction(50,20);

function myName($fname){
  $mynames=$fname;
  echo "print $mynames";
}
myName("Jacqueline");

function subtractingFunction($numb1, $numb2){
  $subtraction=$numb1-$numb2;
  echo "print $subtraction";
}


function multiplicationFunction($no1, $no2){
  $multiplication=$no1*$no2;
  echo "print $multiplication";
}


