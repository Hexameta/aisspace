<?php
include 'conn.php';
$id = $_GET['id'];
$status = 0;
$type = 0;

$query = "SELECT n_status,news_event FROM newsfeed WHERE id='$id'";
if ($result = mysqli_query($conn, $query)) {
    $row = mysqli_fetch_assoc($result);
    $status = $row['n_status'];
    $type = $row['news_event'];
} else {
    echo "Error occured";
}

if ($status == 1) {
    $status = 2;
} else {
    $status = 1;
}


$query1 = "UPDATE newsfeed SET n_status='$status' WHERE id='$id'";
if ($result1 = mysqli_query($conn, $query1)) {
    if ($type == 1) {
        header("Location: ../news.php");
    } elseif ($type == 2) {
        header("Location: ../events.php");
    }
} else {
    echo "Error occured";
}

?>