<?php
// if (($_FILES['upl']['name'] != "")) {
//         // Get the uploaded file's name and extension
//         $file_name = $_FILES['upl']['name'];
//         $file_ext = pathinfo($file_name, PATHINFO_EXTENSION);
//         // Concatenate the unique name and file extension
//         $unique_file_name = $file_name . '.' . $file_ext;
//         if (chmod('../../uploads/', 0777)) {
//         }
//         // Move the uploaded file to a new location with the unique name
//         move_uploaded_file($_FILES['upl']['tmp_name'], '../../uploads/' . $unique_file_name);
//     }
//     header("Location: ../uploads.php");
?>

<?php
if ($_FILES['upl']['name'] != "") {
    $file_name = $_FILES['upl']['name'];
    
    // Specify the upload directory
    $upload_dir = '../../uploads/';
    
    // Move the uploaded file to the new location with the original name
    if (move_uploaded_file($_FILES['upl']['tmp_name'], $upload_dir . $file_name)) {
        header("Location: ../uploads.php");
        exit(); // Make sure to exit after redirecting
    } else {
        echo "Error: Failed to move the uploaded file.";
    }
} else {
    echo "Error: No file selected for upload.";
}
?>





