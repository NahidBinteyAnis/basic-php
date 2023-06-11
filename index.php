<?php 
 echo 250 . "<br/>";

 echo 100 . "<br/>"; 


echo 'Hello World' . "<br/>";
echo strlen("Hello World");
echo "<br/>";
echo strrev("Hello World");
echo "<br/>";
print("I love My country") . "<br/>";

// variable
$welcome_text = "Welcome to my house";
echo $welcome_text  . "<br/>";
$name = "Nahid Bintey Anis";
echo $name  . "<br/>";
$adress = "27/2 A, Shajadpur,Gulshan, Dhaka" . "<br/>";
echo $adress;
$phone_number = "01759506823";
echo $phone_number ."<br/>";

//constants

define("PI",4.5668);

echo PI . "<br/>";

define("NAME","Nahid Bintey Anis");
echo NAME . "<br/>";
define("AGE",34);
echo AGE ."<br/>";
define("EMAIL","nahidbinteyanis@gmail.com");
echo EMAIL . "<br/>";

//Php expression and  oparetor

/*
PHP divides the operators in the following groups:
*Arithmetic operators
*Assignment oparetors
*Comparison operators
*increment / Decrement operators
*Logical operators
*String operators
*Array operators
*Conditional Assignment operators 

PHP Arithmetic operators
+ Addition
- Subtraction
* Multiplication
/ Division
% Modulus
**Exponentiation 

PHP Assignment operators
The basic asignment operator in PHP is "="
x=y The left operand gets set to the value of the expression on the right
x+=y Addition
x-=y Subtraction
x*=y Multiplication
x/=y Division
x%=y Modulus 

PHP Comparison operators

== Equal
=== Identical
!= Not Equal
<> Not Equal
!== Not identical
> Greater than
< Less than
>= Greater than or equal to
<= less than or equal to 
<=> Spaceship 

PHP Increment / Decrement operators

++$X Pre-increment
$x++ Post-increment
--$x Pre-decrement
$x-- Post-decrement 


PHP Logical operators

and And
or OR
xor Xor
&&  And
|| Or
! Not

PHP String operator

. Concatenation
.= Concatenation Assignment

PHP Array operators

+   Union
==  Equality
=== Identity
!=  Inequality
<>  Inequality
!== Non-identity

PHP Conditional Assignment operators

?: Ternary
?? Null coalesing
*/

$a=100;
$b = 5;
$sum = $a+$b;
echo $sum . "<br/>";
echo $a -$b . "<br/>";
echo $a * $b . "<br/>";
echo $b/$a . "<br/>";
echo $a % $b .  "<br/>";
echo $a ** $b .  "<br/>";

$name = "Nahid";
$name .="Sopno";

echo $name;