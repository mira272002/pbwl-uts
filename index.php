<?php  
session_start();
require_once "inc/Koneksi.php";
    if(empty($_SESSION["username"])){
        header("Location:login.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>APOTEK MB</title>
    <link rel="stylesheet" type="text/css" href="layouts/assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        tinymce.init({
        selector: '#keterangan'
        });
    </script>
</head>
<body class="bg-light">
    <!-- navbar -->
    <div class="navbar">
        <div class="container">
            <!-- navbar menu -->
            <ul class="nav-menu float-left">
            <img class="icon" src="layouts/assets/img/logo.png">
                <li><a href="header.php">Home</a></li>
                <li><a href="bnyk_tampil.php">Banyak</a></li>
                <li><a href="obt_tampil.php">Obat</a></li>
                <li><a href="beli_tampil.php">Beli</a></li>
                <li><a href="stok_tampil.php">Stok</a></li>
                <li><a href="logout.php">Log Out</a></li>
            </ul>
            <div class="clearfix"></div>
        </div>
    </div>
</body>
</html>