<?php
// numbers function

// Making calculations
$n1 = 5;
$n2 = 10;

// Addition
$addition = $n1 + $n2;
echo "Addition: $addition <br>";

// Subtraction
$subtraction = $n1 - $n2;
echo "Subtraction: $subtraction <br>";

// Multiplication
$multiplication = $n1 * $n2;
echo "Multiplication: $multiplication <br>";

// Division
$division = $n1 / $n2;
echo "Division: $division <br>";

// Modulus
$modulus = $n2 % $n1;
echo "Modulus: $modulus <br>";

// built-in numeric functions
// abs() - absolute value
$number = -5;
$absolute = abs($number);
echo "Absolute value: $absolute <br>";

// ceil() - round up
$number = 5.1;
$ceil = ceil($number);
echo "Ceil value: $ceil <br>";

// floor() - round down
$number = 5.9;
$floor = floor($number);
echo "Floor value: $floor <br>";

// round() - round
$number = 5.4;
$round = round($number);
echo "Round value: $round <br>";

// Incrementing and decrementing
$number = 5;
$number++;
echo "Increment: $number <br>";

$number = 5;
$number--;
echo "Decrement: $number <br>";
