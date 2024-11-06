<?php
$myFullName = "Asif Abir";

echo "My full name is: $myFullName<br>";

$myFullName = "Mr. Asif Abir";

echo "My full name is: $myFullName<br>";

// Data types

// String
$myString = "Hello World!";
var_dump($myString);
echo "<br>";

// Integer
$myInteger = 123;
var_dump($myInteger);
echo "<br>";

// Float
$myFloat = 12.34;
var_dump($myFloat);
echo "<br>";

// Boolean
$myBoolean = true;
var_dump($myBoolean);
echo "<br>";

// Array
$myArray = array("Asif", "Dhaka", "CMBD");
var_dump($myArray);
echo "<br>";

// Object
class MyClass
{
    public $name = "Asif";
}

$myObject = new MyClass;

var_dump($myObject);
echo "<br>";

// NULL
$myNull = NULL;
var_dump($myNull);
echo "<br>";

// Resource
$myResource = fopen("l2-variable-dataTypes.php", "r");
var_dump($myResource);
echo "<br>";
fclose($myResource);


// Constants
define("birthPlace", "Dhaka");
echo birthPlace;
echo "<br>";

// define("birthPlace", "Comilla");

// This is a single line comment
# This is also a single line comment

/*
this is 
a multi-line 
comment
*/
