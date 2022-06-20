<?php 

require_once "inc/Koneksi.php";
require_once "app/Stok.php";
require_once "index.php";

$stok = new Stok();
$rows = $stok->tampil();

?>

<!-- content -->
<div class="content-tampil">
        <div class="container">
            <div class="box">
                <div class="box-header">
                    STOK
                </div>
                <div class="box-body">
                    <a href="stok_input.php" class="text-green"><i class="fas fa-plus"></i>Tambah</a>

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
                                <th>STOK</th>
                                <th>HARGA</th>
                                <th>AKSI</th>
                            </tr>   
                        </thead>

                    <?php foreach ($rows as $row) { ?>
                        <tr>
                            <td><?php echo $row['kode_obat']; ?></td>
                            <td><?php echo $row['stok']; ?></td>
                            <td><?php echo $row['harga']; ?></td>
                            <td>
                                <a href="stok_edit.php?id=<?php echo $row['kode_obat']; ?>" title="Edit Data" class="text-orange"><i class="fas fa-edit"></i></a> |
                                <a href="stok_delete.php?id=<?php echo $row['kode_obat']; ?>" onclick="return confirm('Yakin ingin hapus ?')" title="Hapus Data" class="text-red"><i class="fas fa-times"></i></a>
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