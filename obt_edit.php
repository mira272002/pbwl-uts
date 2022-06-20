<?php 

require_once "inc/Koneksi.php";
require_once "app/Obat.php";
require_once "index.php";

$id = $_GET['id'];
$obt = new Obat();

$row = $obt->edit($id);
?>

    <!-- content -->
    <div class="content-tampil">
        <div class="container">
            <div class="box">
                <div class="box-header">
                    Edit Obat
                </div>
                <div class="box-body">
                    <form action="obt_proses.php" method="post">
                        <input type="hidden" name="kode_obat" value="<?php echo $row['kode_obat']; ?>">
                            <div class="form-group">
                                <tr>
                                    <td>NAMA</td>
                                    <td><input type="text" name="nama" value="<?php echo $row['nama']; ?>" class="input-control" required></td>
                                </tr>
                            </div>
                            <div class="form-group">
                                <tr>
                                    <td>JENIS</td>
                                    <td><input type="text" name="jenis" value="<?php echo $row['jenis']; ?>" class="input-control" required></td>
                                </tr>
                            </div>
                            <div class="form-group">
                                <tr>
                                    <td>KELUHAN</td>
                                    <td><input type="text" name="keluhan" value="<?php echo $row['keluhan']; ?>" class="input-control" required></td>
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
