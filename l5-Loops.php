<?php
// start point
// end point
// increment/decrement

// while loop

$n = 0;
while ($n < 10) {
    echo $n . "<br>";
    // $n = $n + 1;
    // $n += 1;
    $n++;
}

// do..while loop
$o = 15;
do {
    echo $o . "<br>";
    $o++;
} while ($o < 10);

while ($o < 10) {
    echo $o . "<br>";
    $o++;
}

// for loop
for ($i = 0; $i < 10; $i++) {
    echo $i . "<br>";
}

// foreach

$colors = ["red", "green", "blue", "yellow"];
echo $colors[1] . "<br>";

for ($i = 0; $i < count($colors); $i++) {
    echo "Color name : " . $colors[$i] . "<br>";
}

foreach ($colors as $anything) {
    echo "Color name : " . $anything . "<br>";
}
