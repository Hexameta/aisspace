<?php
if(!isset($_SESSION["uname"])){
    header("Location:../login.php");
}else{
    header('Location: ./companies.php');
}

?>