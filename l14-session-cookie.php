<?php
// Session
session_start();
$_SESSION['name'] = "Asif";

echo $_SESSION['name'];

session_unset();

echo "<br>";

// Cookie for 1 hour
setcookie("name", "Asif Abir", time() + 60);

echo $_COOKIE['name'];
