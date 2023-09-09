<?php
$servername = "localhost";
$username = "root";
$password = "";
$db="aisspace";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$db);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

function dateSup($date)
{
    if ($date == 1 || $date == 21 || $date == 31) {
        return "st";
    } else if ($date == 2 || $date == 22) {
        return "nd";
    } else if ($date == 3 || $date == 23) {
        return "rd";
    } else {
        return "th";
    }
}
?>