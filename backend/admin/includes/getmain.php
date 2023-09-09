<?php
include 'conn.php'; 


$query = "SELECT * FROM main_page";
if ($result = mysqli_query($conn, $query)) {
    //create an array
    $techarray = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $techarray[$row["title"]] = $row["content"];
    }

    echo json_encode($techarray);
} else {
    echo "Error occured";
}

?>