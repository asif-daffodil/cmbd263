<?php
// Mathematical Functions
// abs() - Returns the absolute value of a number
echo abs(-5.5) . "<br>";

// ceil() - Returns the next highest integer of a number
echo ceil(5.2) . "<br>";

// floor() - Returns the next lowest integer of a number
echo floor(5.9) . "<br>";

// round() - Rounds a floating-point number
echo round(5.5) . "<br>";

// rand() - Generates a random number
echo rand(1000, 9999) . "<br>";

// min() - Returns the lowest value in a list of arguments
echo min(0, 150, 30, 20, -8, -200, 30) . "<br>";

// max() - Returns the highest value in a list of arguments
echo max(0, 150, 30, 20, -8, -200, 30) . "<br>";

// sqrt() - Returns the square root of a number
echo sqrt(64) . "<br>";

// pi() - Returns the value of PI
echo pi() . "<br>";

// pow() - Returns the value of a number raised to the power of another number
echo pow(2, 3) . "<br>";

// uniqueid() - Returns a unique ID
echo uniqid() . "<br>";

// if..else, elseif, switch, ternary, null safe operator

// if..else
$age = 20;

if ($age >= 18) {
    echo "You are eligible to vote<br>";
} else {
    echo "You are not eligible to vote<br>";
}

// elseif
$age = 15;

if ($age >= 60) {
    echo "You are a senior citizen<br>";
} elseif ($age >= 18) {
    echo "You are eligible to vote<br>";
} else {
    echo "You are not eligible to vote<br>";
}

// switch
$day = "Wednesday";

switch ($day) {
    case "Saturday":
        echo "Today is Saturday<br>";
        break;
    case "Sunday":
        echo "Today is Sunday<br>";
        break;
    case "Monday":
        echo "Today is Monday<br>";
        break;
    case "Tuesday":
        echo "Today is Tuesday<br>";
        break;
    case "Wednesday":
        echo "Today is Wednesday<br>";
        break;
    case "Thursday":
        echo "Today is Thursday<br>";
        break;
    case "Friday":
        echo "Today is Friday<br>";
        break;
    default:
        echo "Invalid day<br>";
}

// ternary
$age = 20;

echo $age >= 18 ? "You are eligible to vote<br>" : "You are not eligible to vote<br>";

// null safe operator
echo $studentName ?? "No name found<br>";
