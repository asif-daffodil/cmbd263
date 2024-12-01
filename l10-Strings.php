<?php
// Concatenating strings
$firstName = "Md";
$lastName = "Kamal";
$fullName = $firstName . " " . $lastName;
echo "Full name is: $fullName <br>";

// Trimming strings
$trimmedString = "   Hello World!   ";
$trimmedString = trim($trimmedString);

// Removing slashes and other harmful characters
$badString = "Hello / World!";
$goodString = stripslashes($badString);
echo "Good string is: $goodString <br>";

// String functions
// strlen() - string length
$string = "Hello World!";
$length = strlen($string);
echo "String length is: $length <br>";

// str_word_count() - word count
$string = "Hello World!";
$wordCount = str_word_count($string);
echo "Word count is: $wordCount <br>";

// strrev() - reverse string
$string = "Hello World!";
$reversedString = strrev($string);
echo "Reversed string is: $reversedString <br>";

// strpos() - search for a text within a string
$string = "Hello World!";
$position = strpos($string, "World");
echo "Position of World is: $position <br>";

// str_replace() - replace text within a string
$string = "Hello World!";
$replacedString = str_replace("World", "Universe", $string);
echo "Replaced string is: $replacedString <br>";

// strtolower() - convert string to lowercase
$string = "Hello World!";
$lowercase = strtolower($string);
echo "Lowercase string is: $lowercase <br>";

// strtoupper() - convert string to uppercase
$string = "Hello World!";
$uppercase = strtoupper($string);
echo "Uppercase string is: $uppercase <br>";

// ucwords() - convert first character of each word to uppercase
$string = "hello world!";
$ucWords = ucwords($string);
echo "Ucwords string is: $ucWords <br>";

// ucfirst() - convert first character of a string to uppercase
$string = "hello world!";
$ucFirst = ucfirst($string);
echo "Ucfirst string is: $ucFirst <br>";

// str_repeat() - repeat a string
$string = "Hello World! ";
$repeatedString = str_repeat($string, 3);
echo "Repeated string is: $repeatedString <br>";

// str_shuffle() - shuffle a string
$string = "Hello World!";
$shuffledString = str_shuffle($string);
echo "Shuffled string is: $shuffledString <br>";

// str_split() - split a string into an array
$string = "Hello World!";
$splitString = str_split($string);
echo "<pre>";
print_r($splitString);
echo "</pre>";

// str_word_count() - count words in a string
$string = "Hello World!";
$wordCount = str_word_count($string);
echo "Word count is: $wordCount <br>";

// substr() - return part of a string
$string = "Hello World!";
$substring = substr($string, 6, 5);
echo "Substring is: $substring <br>";
