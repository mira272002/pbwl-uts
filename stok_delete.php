<?php 

require_once "inc/Koneksi.php";
require_once "app/Stok.php";


$id = $_GET['id'];

$stok = new Stok();
$rows = $stok->delete($id);

?>

Data berhasil dihapus!

<a href="stok_tampil.php">Kembali</a>