
<?php

/* ---- Conditionals & Operators ---- */

/* ------------ Operators ----------- */
//operators are special characters or symbols that are used to perform operations on statements or operands
//Arithmetic operators are operator that are used to carry out arithmetic operations eg +,-,*,/
$desks=20;
$chairs=25;
$furnitures=$desks+$chairs;
echo $furnitures;

/*Logical operators
1.And(||)-only tends to execute something if both conditions are met
2.Or($$)-only executes something if either or both conditions are met
3.Not(!)-refuses the current state
4.Comparison operator-they are used to compare
  < Less than
  > Greater than
  <= Less than or equal to
  >= Greater than or equal to
  == Equal to
  === Identical to
  != Not equal to
  !== Not identical to
*/

/* ---------- If & If-Else Statements --------- */

/*
** If Statement Syntax
if (condition) {
  // code to be executed if condition is true
}
*/

/* -------- Ternary Operator -------- */
/*
  The ternary operator is a shorthand if statement.
  Ternary Syntax:
    condition ? true : false;
*/


/* -------- Switch Statements ------- */


$team1=89;
$team2=85;
//if statement
if($team1>$team2){
  echo "team1 is greater than team2 <br>";
}
//if else statement
if($team1<$team2){
  echo "team1 is greater than team2";
}else
{
  echo "team2 is greater than team1 <br>";
}

//if else if
$age=50;
if($age<30){
  echo "age is less than 30";
}elseif($age>30 && $age<40){
  echo "your age is between 30 and 40";
}elseif($age>40 && $age<50){
  echo "yor age is between 40 and 50";
}else{
  echo "your age is greater than 50 <br>";
}


//write a simple php code to chek whether one is elegible to vote or not
$miaka=18;
if($miaka<20){
  echo "cannot vote <br>";
}else
{
  echo "can vote <br>";
}
//write a simple php program to check whether a number is positive negative or a zero.
$number=0;
if($number<2){
  echo "the number is negative <br>";

}elseif($number>0){
  echo "the number is positive";
}else{
  echo "the number is zero";
}


$favfood="pilau";
switch($favfood){
  case'githeri':
      echo "my favorite food is githeri";
    break;
    case'ugali':
      echo "my favorite food is ugali";
      break;
      case 'omena':
        echo "my favorite food is omena";
      break;
      case 'uji':
        echo "my favorite food is uji";
        break;
        default:
        echo("my favourite food is pilau");


    
  
}
