<?php
include 'conn.php';

$pass = $_POST['pass2'];
$password = md5($pass);


$query = "UPDATE login SET password='$password' WHERE id=1";

if (mysqli_query($conn, $query)) {
    header('location:../main-page.php');
} else {
    echo "Error updating record: " . mysqli_error($conn);
}
?>