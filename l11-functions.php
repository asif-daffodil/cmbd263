<?php
// functions
function myInfo($sname = "Kuddus", $age = 65, $job = "Boyati")
{
    echo "My name is $sname <br>";
    echo "I am $age years old <br>";
    echo "I am a $job <br>";
}

myInfo("Kamal", 25, "Web Developer");
echo "<br>";
myInfo("Jamal", 30, "Designer");
echo "<br>";
myInfo();
echo "<br>";
myInfo(age: 35, job: "Doctor", sname: "Rahim");
echo "<br>";

function myAddress()
{
    return "Dhaka, Bangladesh";
    echo "This line will not be executed";
}

echo myAddress();
