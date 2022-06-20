<?php 

require_once "inc/Koneksi.php";
require_once "app/Banyak.php";

$bnyk = new Banyak();

if (isset($_POST['btn_simpan'])) {
    $bnyk->simpan();
    header("location:bnyk_tampil.php");
}

if (isset($_POST['btn_update'])) {
    $bnyk->update();
    header("location:bnyk_tampil.php");
}

?>