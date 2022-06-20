<?php 

require_once "inc/Koneksi.php";
require_once "app/Pembeli.php";
require_once "index.php";

$id = $_GET['id'];
$beli = new Pembeli();

$row = $alb->edit($id);
?>

    <!-- content -->
    <div class="content-tampil">
        <div class="container">
            <div class="box">
                <div class="box-header">
                    Edit Pembeli
                </div>
                <div class="box-body">
                    <form action="beli_proses.php" method="post">
                        <input type="hidden" name="no_nota" value="<?php echo $row['no_nota']; ?>">
                            <div class="form-group">
                                <tr>
                                <td>NAMA</td>
                                    <td><input type="text" name="nama" value="<?php echo $row['nama']; ?>" class="input-control" required></td>
                                </tr>
                            </div>
                            <div class="form-group">
                                <tr>
                                    <td>TOTAL</td>
                                    <td><input type="text" name="total" value="<?php echo $row['total']; ?>" class="input-control" required></td>
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