<?php
$msg = "Hello World!";
echo "$msg<br>";
echo '<b>$msg</b><br>';

// Operators
// Arithmetic Operators
/**
 * + Addition
 * - Subtraction
 * * Multiplication
 * / Division
 * % Modulus
 * ** Exponentiation    
 */

/**
 * Assignment Operators
 * =
 * +=
 * -=
 * *=
 * /=
 * %=
 * **=
 */

$num = 5;
$num += 5;
$num - 5;
$num -= 2;
$num *= 3;
$num + 2;
$num /= 2;
$num %= 7;
$num / 17.25;
$num **= 2;

echo $num . "<br>";

// Comparison Operators
/**
 * == Equal
 * === Identical
 * != Not equal
 * <> Not equal
 * !== Not identical
 * > Greater than
 * < Less than
 * >= Greater than or equal to
 * <= Less than or equal to
 */


$num1 = 5;
$num2 = "5";

if ($num1 === $num2) {
    echo "Equal<br>";
} else {
    echo "Not Equal<br>";
}

// Increment/Decrement Operators
/**
 * ++$x Pre-increment
 * $x++ Post-increment
 * --$x Pre-decrement
 * $x-- Post-decrement
 */

$x = 5;
$x = $x + 1;
$x += 1;
$x++;

// Logical Operators
/**
 * and
 * or
 * xor
 * &&
 * ||
 * !
 */

// String Operators
/**
 * . Concatenation
 * .= Concatenation assignment
 */

$firstName = "Asif";
$lastName = "Abir";

$fullName = $firstName . " " . $lastName;

echo $fullName . "<br>";

// Array Operators
/**
 * + Union
 * == Equality
 * === Identity
 * != Inequality
 * <> Inequality
 * !== Non-identity
 */

// Conditional (Ternary) Operator
/**
 * $a ? $b : $c
 */

// Null Coalescing Operator
/**
 * $a ?? $b
 */

// Spaceship Operator
/**
 * $a <=> $b
 */

// Type Operators
/**
 * instanceof
 */

// Error Control Operators
/**
 * @
 */

//  Operator precedence
/**
 * ()
 * ++
 * **
 * !
 * * / %
 * + -
 * .
 * < > <= >=
 * == != === !==
 * &&
 * ||
 * ?:
 * = += -= *= /= %= **=
 */


$file = @file('non_existent_file.txt');
if ($file === false) {
    echo "File not found<br>";
}
