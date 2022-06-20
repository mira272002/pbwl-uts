<?php  

require_once "inc/Koneksi.php";

    session_start();
    session_destroy();
    header("Location:login.php");

?>