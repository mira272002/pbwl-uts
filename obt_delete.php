<?php 

require_once "inc/Koneksi.php";
require_once "app/Obat.php";


$id = $_GET['id'];

$obt = new Obat();
$rows = $obt->delete($id);

?>

Data berhasil dihapus!

<a href="obt_tampil.php">Kembali</a>