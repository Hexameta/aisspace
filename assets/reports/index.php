<?php
include '../../backend/admin/includes/sessionvalidate.php';
if(isset($_SESSION["uname"])){
    header("Location: ../../events/");
}
?>