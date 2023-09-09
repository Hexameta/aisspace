<?php
$file = $_GET['file'];
unlink("../../uploads/".$file);
header("Location: ../uploads.php");

?>