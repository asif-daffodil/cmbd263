<?php
// Find maximum number from an array
$numbers = [15, 16, 9, 63, 52, 32, 3, 81, 55, 15, 63];
$max = $numbers[0];
foreach ($numbers as $number) {
    if ($number > $max) {
        $max = $number;
    }
}

echo "Maximum number is: $max <br>";

// Find 2nd max number from an array
$max = $numbers[0];
$secondMax = $numbers[0];
foreach ($numbers as $number) {
    if ($number > $max) {
        $secondMax = $max;
        $max = $number;
    } elseif ($number > $secondMax && $number != $max) {
        $secondMax = $number;
    }
}

echo "2nd Maximum number is: $secondMax <br>";

// Sort array from min to max
sort($numbers);
echo "<pre>";
print_r($numbers);
echo "</pre>";

// Calculate average number of an array
$sum = 0;
foreach ($numbers as $number) {
    $sum += $number;
}

$average = $sum / count($numbers);

echo "Average number is: $average <br>";

// Merging 2 different types of array together
$numbers = [15, 16, 9, 63, 52, 32, 3, 81, 55, 15, 63];
$names = ["Kamal", "Jamal", "Rahim", "Karim", "Salam"];

$mergedArray = array_merge($numbers, $names);
echo "<pre>";
print_r($mergedArray);
echo "</pre>";

// Search data from an array
$numbers = [15, 16, 9, 63, 52, 32, 3, 81, 55, 15, 63];
$search = 63;
$found = false;
foreach ($numbers as $number) {
    if ($number == $search) {
        $found = true;
        break;
    }
}

if ($found) {
    echo "Data found <br>";
} else {
    echo "Data not found <br>";
}

// Show array data in lowercase and uppercase
$names = ["Kamal", "Jamal", "Rahim", "Karim", "Salam"];
foreach ($names as $name) {
    echo strtolower($name) . "<br>";
}

foreach ($names as $name) {
    echo strtoupper($name) . "<br>";
}

// Get unique values
$numbers = [15, 16, 9, 63, 52, 32, 3, 81, 55, 15, 63];
$uniqueNumbers = array_unique($numbers);
echo "<pre>";
print_r($uniqueNumbers);
echo "</pre>";

// Merge 2 comma separated lists with unique value only
$numbers1 = "15, 16, 9, 63, 52, 32, 3, 81, 55, 15, 63";
$numbers2 = "15, 16, 9, 63, 52, 32, 3, 81, 55, 15, 63";

$numbers1 = explode(", ", $numbers1);
$numbers2 = explode(", ", $numbers2);

$mergedArray = array_merge($numbers1, $numbers2);
$uniqueMergedArray = array_unique($mergedArray);

echo "<pre>";
print_r($uniqueMergedArray);
echo "</pre>";

// Difference between 2 multi-dimensional arrays
$students1 = [
    [
        "name" => "Kamal Mia",
        "age" => 25,
        "city" => "Dhaka",
        "isMarried" => false
    ],
    [
        "name" => "Jabbar Mia",
        "age" => 31,
        "city" => "Cumilla",
        "isMarried" => false
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
        "city" => "Rajshahi",
        "isMarried" => true
    ]
];

$students2 = [
    [
        "name" => "Kamal Mia",
        "age" => 26,
        "city" => "Dhaka",
        "isMarried" => false
    ],
    [
        "name" => "Tamal Mia",
        "age" => 29,
        "city" => "Noyakhali",
        "isMarried" => false
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

function compareArrays($arr1, $arr2)
{
    $differences = [];

    foreach ($arr1 as $key => $student1) {
        $student2 = $arr2[$key] ?? null;

        if ($student2) {
            foreach ($student1 as $field => $value) {
                if ($student1[$field] !== $student2[$field]) {
                    $differences[$key][$field] = [
                        'students1' => $student1[$field],
                        'students2' => $student2[$field]
                    ];
                }
            }
        } else {
            $differences[$key] = "No matching student in second array";
        }
    }

    return $differences;
}

$diff = compareArrays($students1, $students2);

echo "<pre>";
print_r($diff);
echo "</pre>";

// Check if all values are string or not
$names = ["Kamal", "Jamal", "Rahim", "Karim", "Salam"];
$allString = true;
foreach ($names as $name) {
    if (!is_string($name)) {
        $allString = false;
        break;
    }
}

if ($allString) {
    echo "All values are string <br>";
} else {
    echo "All values are not string <br>";
}

// Filter out array data with some specific keys

$students = [
    [
        "name" => "Kamal Mia",
        "age" => 25,
        "city" => "Dhaka",
        "isMarried" => false
    ],
    [
        "name" => "Jabbar Mia",
        "age" => 31,
        "city" => "Cumilla",
        "isMarried" => false
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
        "city" => "Rajshahi",
        "isMarried" => true
    ]
];

function filterArray($arr, $keys)
{
    $filteredArray = [];

    foreach ($arr as $student) {
        $filteredStudent = [];
        foreach ($student as $key => $value) {
            if (in_array($key, $keys)) {
                $filteredStudent[$key] = $value;
            }
        }
        $filteredArray[] = $filteredStudent;
    }

    return $filteredArray;
}

$filteredStudents = filterArray($students, ["name", "city"]);

echo "<pre>";
print_r($filteredStudents);
echo "</pre>";

// Remove all white spaces from an array
$names = ["Kamal", "Jamal", "Rahim", "Karim", "Salam"];
foreach ($names as $key => $name) {
    $names[$key] = trim($name);
}

echo "<pre>";
print_r($names);
echo "</pre>";

// Combine 2 array and use one array data as keys and others as values
$keys = ["name", "age", "city", "isMarried"];
$values = ["Kamal", 25, "Dhaka", false];
$combinedArray = array_combine($keys, $values);

echo "<pre>";
print_r($combinedArray);
echo "</pre>";

// Convert string to array
$names = "Kamal, Jamal, Rahim, Karim, Salam";
$names = explode(", ", $names);

echo "<pre>";
print_r($names);
echo "</pre>";
