<?php 

require_once "inc/Koneksi.php";
require_once "app/Banyak.php";


$id = $_GET['id'];

$bnyk = new Banyak();
$rows = $bnyk->delete($id);

?>

Data berhasil dihapus!

<a href="bnyk_tampil.php">Kembali</a>