<?php
// Regular Expression
// preg_match(), preg_match_all(), preg_replace(), preg_split()

// preg_match()
$pattern = "/^[A-Za-z,!0-9 ]*$/i";
$subject = "Hello, World! 123";
var_dump(preg_match($pattern, $subject));

echo "<br>";

/**
 * ^ means start of the string
 * i means case-insensitive
 * * means zero or more times
 */

//  email validation with preg_match()
$email = "asif@dipti.com.bd";
$pattern = "/^[A-Za-z0-9._-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,6}$/i";
var_dump(preg_match($pattern, $email));

echo "<br>";

// hard password validation with preg_match()
$password = "Asif@123";
// $pattern = "/^(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])(?=.*[@#$%^&+=]).{8,20}$/";
$pattern = "/^(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])(?=.*[@#$%^&+=]).{8,20}$/";
/**
 * ^ means start of the string
 * (?=.*[A-Z]) means at least one uppercase letter
 * (?=.*[a-z]) means at least one lowercase letter
 * (?=.*[0-9]) means at least one digit
 * (?=.*[@#$%^&+=]) means at least one special character
 * .{8,20} means 8 to 20 characters
 */
