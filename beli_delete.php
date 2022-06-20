<?php 

require_once "inc/Koneksi.php";
require_once "app/Pembeli.php";


$id = $_GET['id'];

$beli = new Pembeli();
$rows = $beli->delete($id);

?>

Data berhasil dihapus!

<a href="beli_tampil.php">Kembali</a>