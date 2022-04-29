<?php

date_default_timezone_set('Asia/Kolkata');

$timeframe=90*60*24*60+time();

 
 
setcookie('LastVisit', date("G:i - m/d/y"), $timeframe);

if(isset($_COOKIE['LastVisit']))

        $visit = $_COOKIE['LastVisit'];
else
	echo "Welcome!";

echo "Your last visit was on- ". $visit;
?>