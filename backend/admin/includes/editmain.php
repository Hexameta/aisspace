<?php
include 'conn.php';
$email = $_POST['email'];
$phone1 = $_POST['ph1'];
$phone2 = $_POST['ph2'];
$count1 = $_POST['c1'];
$count2 = $_POST['c2'];
$count3 = $_POST['c3'];
$count4 = $_POST['c4'];

$queries = array();
$queries[] = "UPDATE main_page set content = '$email' where title = 'email'";
$queries[] = "UPDATE main_page set content = '$phone1' where title = 'ph1'";
$queries[] = "UPDATE main_page set content = '$phone2' where title = 'ph2'";
$queries[] = "UPDATE main_page set content = '$count1' where title = 'c1'";
$queries[] = "UPDATE main_page set content = '$count2' where title = 'c2'";
$queries[] = "UPDATE main_page set content = '$count3' where title = 'c3'";
$queries[] = "UPDATE main_page set content = '$count4' where title = 'c4'";

foreach ($queries as $query) {
    mysqli_query($conn, $query);
}
header("Location: ../main-page.php")

?>