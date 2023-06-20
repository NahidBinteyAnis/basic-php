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

echo "<br/>";
var_dump(10>5);
echo "<br/>";
var_dump(10<5);
echo "<br/>";
var_dump(10 >= 5);
echo "<br/>";
var_dump(10 <= 9);
echo "<br/>";
var_dump(10==5);
echo "<br/>";
var_dump(10==10);
echo "<br/>";
var_dump(10!=9);
echo "<br/>";
var_dump(10===10);
echo "<br/>";
// Condition if ealse

 $day = "Monday";

if ($day === "Friday"){
echo "Today is holyday";
}
else
{
    echo "Today office open ";
}

echo "<br/>";


if ($day === "Sunday" ||$day === "Saturday" ){
    echo "Today is holyday";
    }
else{
    echo "Today is not Holyday";
}
echo "<br/>";

if ($day === "Sunday" ||$day === "Saturday" ){
    echo "Today is holyday";
    }
    elseif($day === "Monday"){
      echo "This is Monday.";
    }
else{
    echo "Today is not Holyday";
}
echo "<br/>";
/* Array

In PHP there are three types of arrys:
* Indexed arrays - Arrays with a numeric Indexed
* Associative arrays - Arrays with Named keays
* Multidimensional arrays - Arrays containing one or more arrays. 
*/


//Indexed arrays

/*$array = ["a","b", 2.5, 10 ];
echo $array[0];
echo "<br/>";
echo $array[1];
echo "<br/>";
echo $array[2];
echo "<br/>";
echo $array[3];
echo "<br/>";

//Associative arrays

$array = [
   "first_letter" =>"a",
    "Last_letter" =>"b", 
    "points" => 2.5, 
   "age" =>10 ];

   echo $array["first_letter"];
   echo "<br/>";
   echo $array["age"]; 
   echo "<br/>";
   echo $array["Last_letter"];
   echo "<br/>";
   echo $array["points"];
   echo "<br/>";*/

   /*Multidimensional arrays

   $array =[
    "Name" => "Nahid",
    "age" => 25,
    "Address" => [
        "Street_address" => "27/2A , Shajadpur",
        "City" => "Dhaka",
        "Zipcode" => "1212",
        "Country" =>"Bangladesh" ],
        "Mobile_Number"=>
        [
            "country_prefix"=>"+880",
            "Number"=>"1759506823"
        ],
    ];
    print_r ($array);
*/
$array = [
   1,2,3,4,5,6,7,8,9,10
];
