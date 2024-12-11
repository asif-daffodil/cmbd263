<?php
date_default_timezone_set("Asia/Dhaka");
echo date("d-F-Y h:i:s A l") . "<br>";

// mktime (hour, minute, second, month, day, year)
$myTime = mktime(12, 0, 0, 10, 9, 2009);
echo date("d-F-Y h:i:s A l", $myTime) . "<br>";

// strtotime
$myTime = strtotime("next sunday");
echo date("d-F-Y h:i:s A l", $myTime) . "<br>";

$myTime = strtotime("+3 years +2 months +1 day +4 hours +5 minutes +6 seconds");
echo date("d-F-Y h:i:s A l", $myTime) . "<br>";

// next 7 bfridays
$startDate = strtotime("next friday");
$endDate = strtotime("+6 weeks", $startDate);
while ($startDate <= $endDate) {
    echo date("d-F-Y l", $startDate) . "<br>";
    $startDate = strtotime("+1 week", $startDate);
}

// difference between two dates by date_diff
$startDate = date_create(date("Y-m-d h:i:s"));
$endDate = date_create("2026-02-21 12:00:00");
$diff = date_diff($startDate, $endDate);
echo $diff->format("%y years, %m month, %d days, %h hours %i minutes %s seconds") . "<br>";
