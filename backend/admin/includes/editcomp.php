<?php
include 'conn.php';
$name = $mysqli -> real_escape_string ($_POST['name']);
$website = $mysqli -> real_escape_string ($_POST['website']);
$description = $mysqli -> real_escape_string ($_POST['description']);
$imageName = $_POST['imageName'];
$unique_file_name = "";
$id = $_POST['id'];


$query = "UPDATE companies set comp_name = '$name', comp_website = '$website', comp_details = '$description' where id = $id";

if ($result = mysqli_query($conn, $query)) {

    if (($_FILES['image']['name'] != "")) {
        // Get the uploaded file's name and extension
        $file_name = $_FILES['image']['name'];
        $file_ext = pathinfo($file_name, PATHINFO_EXTENSION);
        // Concatenate the unique name and file extension
        $unique_file_name = $id . '.' . $file_ext;
        if (chmod('../../../assets/images/companies/', 0777)) {
        }
        unlink("../../../assets/images/companies/" . $imageName);
        // Move the uploaded file to a new location with the unique name
        move_uploaded_file($_FILES['image']['tmp_name'], '../../../assets/images/companies/' . $unique_file_name);
        mysqli_query($conn, "UPDATE companies SET comp_logo='$unique_file_name' WHERE id=" . $id);
    }

    header("Location: ../companies.php");
} else {
    echo "Error occured";
}
?>