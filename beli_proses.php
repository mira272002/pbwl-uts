<?php 

require_once "inc/Koneksi.php";
require_once "app/Pembeli.php";

$beli = new Pembeli();

if (isset($_POST['btn_simpan'])) {
    $beli->simpan();
    header("location:beli_tampil.php");
}

if (isset($_POST['btn_update'])) {
    $beli->update();
    header("location:beli_tampil.php");
}

?>