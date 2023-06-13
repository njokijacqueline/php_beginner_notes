<?php

/* ----- Variables & Data Types ----- */

/* --------- PHP Data Types --------- */
/*
- String - A string is a series of characters surrounded by quotes
- Integer - Whole numbers
- Float - Decimal numbers
- Boolean - true or false
- Array - An array is a special variable, which can hold more than one value
- Object - A class
- NULL - Empty variable
- Resource - A special variable that holds a resource
*/

/* --------- Variable Rules --------- */
/*
- Variables must be prefixed with $
- Variables must start with a letter or the underscore character
- variables can't start with a number
- Variables can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ )
- Variables are case-sensitive ($name and $NAME are two different variables)
*/

$name='Jackie';
$age=20;
$favfood='pizza';
$gender='female';

echo "hello my name is $name and i am $age years old. My favourite food is $favfood and i am a $gender<br>";

$cars=8;
$momcars=2;
$brocars=2;
$dadcars=1;
$remainingcars=$cars-($momcars+$brocars+$dadcars);
echo "$remainingcars";
