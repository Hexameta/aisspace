<?php
include 'conn.php';
$image=$_GET['image'];
$id = $_GET['id'];
$type = $_GET['ne'];
$query = "DELETE FROM newsfeed WHERE id = $id";
if($result = mysqli_query($conn, $query)){
    unlink("../../../assets/images/news/".$image);
    if($type == 1){
        header("Location: ../news.php");
    }elseif($type == 2){
        header("Location: ../events.php");
    }else{
        echo "Error occured. Record not deleted";
    }
}
?>