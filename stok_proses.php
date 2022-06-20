<?php 

require_once "inc/Koneksi.php";
require_once "app/Stok.php";

$stok = new Stok();

if (isset($_POST['btn_simpan'])) {
    $stok->simpan();
    header("location:stok_tampil.php");
}

if (isset($_POST['btn_update'])) {
    $stok->update();
    header("location:stok_tampil.php");
}

?>