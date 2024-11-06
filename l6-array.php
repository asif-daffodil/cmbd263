<?php
// index array
$studentInfo = ["Kamal Mia", "Male", "Dhaka", "01712345678"];

echo "<pre>";
var_dump($studentInfo);
echo "</pre>";

echo "<pre>";
print_r($studentInfo);
echo "</pre>";

echo $studentInfo[0] . "<br>";
echo $studentInfo[1] . "<br>";
echo $studentInfo[2] . "<br>";
echo $studentInfo[3] . "<br>";

// count() function
echo count($studentInfo) . "<br>";

for ($i = 0; $i < count($studentInfo); $i++) {
    echo $studentInfo[$i] . "<br>";
}

foreach ($studentInfo as $info) {
    echo $info . "<br>";
}

// associative array
$studentInfo = [
    "name" => "Kamal Mia",
    "gender" => "Male",
    "address" => "Dhaka",
    "phone" => "01712345678"
];

echo "<pre>";
print_r($studentInfo);
echo "</pre>";

foreach ($studentInfo as $key => $info) {
    echo ucfirst($key) . " : " . $info . "<br>";
}

// multi-dimensional array
$studentInfo = [
    [
        "name" => "Kamal Mia",
        "age" => 25,
        "city" => "Dhaka",
        "isMarried" => false
    ],
    [
        "name" => "Jamal Mia",
        "age" => 30,
        "city" => "Chittagong",
        "isMarried" => true
    ],
    [
        "name" => "Rahim Mia",
        "age" => 35,
        "city" => "Sylhet",
        "isMarried" => false
    ],
    [
        "name" => "Karim Mia",
        "age" => 40,
        "city" => "Khulna",
        "isMarried" => true
    ]
];

echo "<pre>";
print_r($studentInfo);
echo "</pre>";

echo $studentInfo[0]["name"] . "<br>";

foreach ($studentInfo as $student) {
    foreach ($student as $key => $value) {
        echo ucfirst($key) . " : " . $value . "<br>";
    }
}

// array functions
// array()
$colors = array("red", "green", "blue", "yellow");

// is_array()
echo is_array($colors) . "<br>";

// in_array()
echo in_array("green", $colors) . "<br>";

// array_merge()
$fruits = ["apple", "banana", "mango"];
$vegetables = ["potato", "onion", "carrot"];
$foods = array_merge($fruits, $vegetables);
echo "<pre>";
print_r($foods);
echo "</pre>";

// array_keys()
$keys = array_keys($studentInfo[0]);
echo "<pre>";
print_r($keys);
echo "</pre>";

// array_key_exists()
echo array_key_exists("name", $studentInfo[0]) . "<br>";

// array_shift()
echo array_shift($colors) . "<br>";
echo "<pre>";
print_r($colors);
echo "</pre>";

// array_unshift()
array_unshift($colors, "black");
echo "<pre>";
print_r($colors);
echo "</pre>";

// array_push()
array_push($colors, "white");
echo "<pre>";
print_r($colors);
echo "</pre>";

// array_pop()
echo array_pop($colors) . "<br>";
echo "<pre>";
print_r($colors);
echo "</pre>";

// array_values()
$values = array_values($studentInfo[0]);
echo "<pre>";
print_r($values);
echo "</pre>";

// array_map()
function myFunc($n)
{
    return $n * $n;
}

$numbers = [1, 2, 3, 4, 5];
$squares = array_map("myFunc", $numbers);
echo "<pre>";
print_r($squares);
echo "</pre>";

// array_unique()
$numbers = [1, 2, 3, 4, 5, 1, 2, 3];
$uniqueNumbers = array_unique($numbers);
echo "<pre>";
print_r($uniqueNumbers);
echo "</pre>";

// array_slice()
$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9];
$slicedNumbers = array_slice($numbers, 3, 4);
echo "<pre>";
print_r($slicedNumbers);
echo "</pre>";

// array_diff()
$numbers1 = [1, 2, 3, 4, 5];
$numbers2 = [3, 4, 5, 6, 7];
$difference = array_diff($numbers1, $numbers2);
echo "<pre>";
print_r($difference);
echo "</pre>";


// array_search()
echo array_search("green", $colors) . "<br>";


// array_reverse()
$reversedColors = array_reverse($colors);
echo "<pre>";
print_r($reversedColors);
echo "</pre>";
