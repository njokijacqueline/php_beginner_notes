<?php
/* --------- Array Functions -------- */

/*
  Functions to work with arrays
  https://www.php.net/manual/en/ref.array.php
*/

//Get array length
$fruits=array(
  "Mango", "Banana", "Grapes", "Tangerine", "Oranges", "Apples", "Pears", "Watermelon", "Strawberries","Tree tomato"
);
//echo count($fruits);

//Search element in array
echo in_array("Pineapple", $fruits);


//Adding an element to an array
$fruits[]="kiwi";
array_push($fruits, "thorn melon", "dates", "coconut", "groundnuts");
print_r($fruits);

//Removing an element from an array
array_pop($fruits);//Function to remove last element in the array
array_shift($fruits);//Function to remove the first element in an array
unset($fruits[2]);//Removes specific element in an array
print_r($fruits);