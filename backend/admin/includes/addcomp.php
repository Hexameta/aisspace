<?php
include 'conn.php';
$name = $conn -> real_escape_string ($_POST['name']);
$website = $conn -> real_escape_string ($_POST['website']);
$description = $conn -> real_escape_string ($_POST['description']);

$query = "INSERT INTO companies (comp_name, comp_website, comp_details) VALUES ('$name', '$website', '$description')";

if ($result = mysqli_query($conn, $query)) {

        if (($_FILES['image']['name'] != "")) {
        // Get the uploaded file's name and extension
        $file_name = $_FILES['image']['name'];
        $file_ext = pathinfo($file_name, PATHINFO_EXTENSION);
        $prev = mysqli_insert_id($conn); 
        // Concatenate the unique name and file extension
        $unique_file_name = $prev . '.' . $file_ext;
        if (chmod('../../../assets/images/companies/', 0777)) {
        }
        // Move the uploaded file to a new location with the unique name
        move_uploaded_file($_FILES['image']['tmp_name'], '../../../assets/images/companies/' . $unique_file_name);
        ;
        mysqli_query($conn, "UPDATE companies SET comp_logo='$unique_file_name' WHERE id=" . $prev);
    }
    header("Location: ../companies.php");
} else {
    echo "Error occured";
}
?>