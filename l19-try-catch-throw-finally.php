<?php
function myTry($x, $y, $z)
{
    try {
        $a = ($x + 5) / ($y - 5);
        if ($a > $z) {
            throw new Exception("Value of a is greater than z");
        } else {
            echo "Value of a is $a";
        }
    } catch (Exception $e) {
        echo "Caught exception: " . $e->getMessage();
    } finally {
        echo "<br>Finally block executed";
    }
}

myTry(10, 10, 2);

// fatal error

// myTry(10, 5, 2);
