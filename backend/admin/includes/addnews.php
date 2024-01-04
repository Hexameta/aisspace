<?php
include 'conn.php';
$title = $conn->real_escape_string($_POST['title']);
$date = $_POST['date'];
$description = $conn->real_escape_string($_POST['description']);
$type = $_POST['ne'];
$prev = 0;
$query = "INSERT INTO newsfeed(n_title, n_date, n_desc, news_event, n_status) VALUES ('$title', '$date', '$description', $type, 1)";

if ($result = mysqli_query($conn, $query)) {

    if (($_FILES['image']['name'] != "")) {
        // Get the uploaded file's name and extension
        $file_name = $_FILES['image']['name'];
        $file_ext = pathinfo($file_name, PATHINFO_EXTENSION);
        $prev = mysqli_insert_id($conn);
        // Concatenate the unique name and file extension
        $unique_file_name = $prev . '.' . $file_ext;
        if (chmod('../../../assets/images/news/', 0777)) {
        }
        // Move the uploaded file to a new location with the unique name
        move_uploaded_file($_FILES['image']['tmp_name'], '../../../assets/images/news/' . $unique_file_name);
        ;
        mysqli_query($conn, "UPDATE newsfeed SET n_image='$unique_file_name' WHERE id=" . $prev);
    }

    if ($type == 2) {
        if (($_FILES['report']['name'])) {
            // Get the uploaded file's name and extension
            $file_name = $_FILES['report']['name'];
            $file_ext = pathinfo($file_name, PATHINFO_EXTENSION);
            // Concatenate the unique name and file extension
            $unique_file_name = $prev . '.' . $file_ext;
            if (chmod('../../../assets/reports/', 0777)) {
            }
            // Move the uploaded file to a new location with the unique name
            move_uploaded_file($_FILES['report']['tmp_name'], '../../../assets/reports/' . $unique_file_name);
            ;
            mysqli_query($conn, "UPDATE newsfeed SET n_reports='$unique_file_name' WHERE id=" . $prev);
        }
    }
    if ($type == 1) {
        header("Location: ../news.php");
    } elseif ($type == 2) {
        header("Location: ../events.php");
    } else {
        echo "Upload Error";
    }
} else {
    echo "Error occured";
}
?>