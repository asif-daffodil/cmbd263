<?php
session_start();

echo $_SESSION['name'] ?? null;
echo "<br>";

// $GLOBALS
$x = 5;

function myTest()
{
    echo $GLOBALS['x'];
}

myTest();
echo "<br>";

// $_SERVER
echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];
echo "<br>";
echo $_SERVER['SERVER_ADDR'];
echo "<br>";
echo $_SERVER['REQUEST_METHOD'];
echo "<br>";

// $_ENV
$_ENV['USER'] = "Asif";
echo $_ENV['USER'];
echo "<br>";

// $_GET
echo $_GET['city'] ?? null;
echo "<br>";
echo $_GET['country'] ?? null;
