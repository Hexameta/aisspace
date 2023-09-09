<?php
include 'conn.php';
$title = $_POST['title'];
$description = $_POST['description'];
$date = $_POST['date'];
$imageName = $_POST['imageName'];
$unique_file_name = "";
$id = $_POST['id'];
$type = $_POST['ne'];

$query = "UPDATE newsfeed set n_title = '$title', n_desc = '$description', n_date = '$date' where id = $id";

if ($result = mysqli_query($conn, $query)) {

    if (($_FILES['image']['name'] != "")) {
        // Get the uploaded file's name and extension
        $file_name = $_FILES['image']['name'];
        $file_ext = pathinfo($file_name, PATHINFO_EXTENSION);
        // Concatenate the unique name and file extension
        $unique_file_name = $id . '.' . $file_ext;
        if (chmod('../../../assets/images/news/', 0777)) {
        }
        unlink("../../../assets/images/news/" . $imageName);
        // Move the uploaded file to a new location with the unique name
        move_uploaded_file($_FILES['image']['tmp_name'], '../../../assets/images/news/' . $unique_file_name);
        mysqli_query($conn, "UPDATE newsfeed SET n_image='$unique_file_name' WHERE id=" . $id);
        if ($type == 1) {
            header("Location: ../news.php");
        } elseif ($type == 2) {
            header("Location: ../events.php");
        }else {
            echo "Image upload error";
        }
    }
    if ($type == 1) {
        header("Location: ../news.php");
    } elseif ($type == 2) {
        header("Location: ../events.php");
    }
} else {
    echo "Error occured";
}
?>