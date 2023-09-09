<?php
include 'admin/includes/sessionvalidate.php';
if(isset($_SESSION["uname"])){
    header("Location: ./admin/companies.php");
}
?>