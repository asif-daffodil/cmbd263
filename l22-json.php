<?php
// json_decode
$studentInfoJson = '{"name": "Asif", "age": 25, "city": "Dhaka"}';
$studentInfo = json_decode($studentInfoJson);
echo "<pre>";
print_r($studentInfo);
echo "</pre>";

// json_encode
$studentInfo = [
    "name" => "Asif",
    "age" => 25,
    "city" => "Dhaka"
];

$studentInfoJson = json_encode($studentInfo);
echo $studentInfoJson;
