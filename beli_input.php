<?php 

require_once "inc/Koneksi.php";
require_once "app/Pembeli.php";
require_once "index.php";

?>

<!-- content -->
<div class="content-tampil">
        <div class="container">
            <div class="box">
                <div class="box-header">
                    Tambah Pembeli
                </div>
                <div class="box-body">
                    <form action="alb_proses.php" method="post">
                        <div class="form-group">
                            <tr>
                            <td>NAMA</td>
                                <td><input type="text" name="nama" class="input-control" required></td>
                            </tr>
                        </div>
                        <div class="form-group">
                            <tr>
                                <td>TOTAL</td>
                                <td><input type="text" name="total" class="input-control" required></td>
                            </tr>
                        </div>
                            <tr>
                                <td></td>
                                <td><input type="submit" name="btn_simpan" value="SIMPAN" class="btn btn-blue"></td>
                            </tr>
                    </form>
                </div>
            </div>
        </div>
</div>
