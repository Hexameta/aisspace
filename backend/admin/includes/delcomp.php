<?php
include 'conn.php';
$image=$_GET['image'];
$id = $_GET['id'];
$query = "DELETE FROM companies WHERE id = $id";
if($result = mysqli_query($conn, $query)){
    unlink("../../../assets/images/companies/".$image);
    header("Location: ../companies.php");
}
?>