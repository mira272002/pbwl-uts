<?php 

require_once "inc/Koneksi.php";
require_once "app/Banyak.php";
require_once "index.php";

$id = $_GET['id'];
$bnyk = new Banyak();

$row = $bnyk->edit($id);
?>

    <!-- content -->
    <div class="content-tampil">
        <div class="container">
            <div class="box">
                <div class="box-header">
                    Edit Banyak
                </div>
                <div class="box-body">
                    <form action="bnyk_proses.php" method="post">
                        <input type="hidden" name="no_nota" value="<?php echo $row['no_nota']; ?>">
                            <div class="form-group">
                                <tr>
                                    <td>KODE OBAT</td>
                                    <td><input type="text" name="kode_obat" value="<?php echo $row['kode_obat']; ?>" class="input-control" required></td>
                                </tr>
                            </div>
                            <div class="form-group">
                                <tr>
                                    <td>BANYAK</td>
                                    <td><input type="text" name="banyak" value="<?php echo $row['banyak']; ?>" class="input-control" required></td>
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
