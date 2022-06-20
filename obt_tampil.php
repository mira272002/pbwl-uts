<?php 

require_once "inc/Koneksi.php";
require_once "app/Obat.php";
require_once "index.php";

$obt = new Obat();
$rows = $obt->tampil();

?>

<!-- content -->
<div class="content-tampil">
        <div class="container">
            <div class="box">
                <div class="box-header">
                    OBAT
                </div>
                <div class="box-body">
                    <a href="obt_input.php" class="text-green"><i class="fas fa-plus"></i>Tambah</a>

                    <form action="">
                        <div class="input-group">
                            <input type="text" name="key" placeholder="Pencarian">
                            <button type="submit"><i class="fas fa-search"></i></button>
                        </div>
                    </form>

                    <table class="table">
                        <thead>
                            <tr>
                                <th>KODE OBAT</th>
                                <th>NAMA</th>
                                <th>JENIS</th>
                                <th>KELUHAN</th>
                                <th>AKSI</th>
                            </tr>   
                        </thead>

                    <?php foreach ($rows as $row) { ?>
                        <tr>
                            <td><?php echo $row['kode_obat']; ?></td>
                            <td><?php echo $row['nama']; ?></td>
                            <td><?php echo $row['jenis']; ?></td>
                            <td><?php echo $row['keluhan']; ?></td>
                            <td>
                                <a href="obt_edit.php?id=<?php echo $row['kode_obat']; ?>" title="Edit Data" class="text-orange"><i class="fas fa-edit"></i></a> |
                                <a href="obt_delete.php?id=<?php echo $row['kode_obat']; ?>" onclick="return confirm('Yakin ingin hapus ?')" title="Hapus Data" class="text-red"><i class="fas fa-times"></i></a>
                            </td>
                        </tr>
                    <?php } ?>
                    </table>
                </div>
            </div>
        </div>
</div>    

<!-- footer -->
<div class="footer">
    <p>Copyright &copy; APOTEK All Rights reserved 2021</p>
</div>

