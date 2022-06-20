<?php 

require_once "inc/Koneksi.php";
require_once "app/Obat.php";

$obt = new Obat();

if (isset($_POST['btn_simpan'])) {
    $obt->simpan();
    header("location:obt_tampil.php");
}

if (isset($_POST['btn_update'])) {
    $obt->update();
    header("location:obt_tampil.php");
}

?>