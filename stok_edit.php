<?php 

require_once "inc/Koneksi.php";
require_once "app/Stok.php";
require_once "index.php";

$id = $_GET['id'];
$stok = new Stok();

$row = $stok->edit($id);
?>

    <!-- content -->
    <div class="content-tampil">
        <div class="container">
            <div class="box">
                <div class="box-header">
                    Edit Stok
                </div>
                <div class="box-body">
                    <form action="stok_proses.php" method="post">
                        <input type="hidden" name="kode_obat" value="<?php echo $row['kode_obat']; ?>">
                            <div class="form-group">
                                <tr>
                                <td>STOK</td>
                                    <td><input type="text" name="stok" value="<?php echo $row['stok']; ?>" class="input-control" required></td>
                                </tr>
                            </div>
                            <div class="form-group">
                                <tr>
                                    <td>HARGA</td>
                                    <td><input type="text" name="harga" value="<?php echo $row['harga']; ?>" class="input-control" required></td>
                                </tr>
                            </div>
                            <tr>
                                <td></td>
                                <td><input type="submit" name="btn_update" value="UPDATE" class="btn btn-blue"></td>
                            </tr>
                    </form>
                </div>
            </div>
        </div>
    </div>