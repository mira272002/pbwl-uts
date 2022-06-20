<?php 

require_once "inc/Koneksi.php";
require_once "app/Banyak.php";
require_once "index.php";

$bnyk = new Banyak();
$rows = $bnyk->tampil();

?>

<!-- content -->
<div class="content-tampil">
        <div class="container">
            <div class="box">
                <div class="box-header">
                    BANYAK
                </div>
                <div class="box-body">
                    <a href="bnyk_input.php" class="text-green"><i class="fas fa-plus"></i>Tambah</a>

                    <form action="">
                        <div class="input-group">
                            <input type="text" name="key" placeholder="Pencarian">
                            <button type="submit"><i class="fas fa-search"></i></button>
                        </div>
                    </form>

                    <table class="table">
                        <thead>
                            <tr>
                                <th>NO NOTA</th>
                                <th>KODE OBAT</th>
                                <th>BANYAK</th>
                                <th>AKSI</th>
                            </tr>   
                        </thead>

                    <?php foreach ($rows as $row) { ?>
                        <tr>
                            <td><?php echo $row['no_nota']; ?></td>
                            <td><?php echo $row['kode_obat']; ?></td>
                            <td><?php echo $row['banyak']; ?></td>
                            <td>
                                <a href="bnyk_edit.php?id=<?php echo $row['no_nota']; ?>" title="Edit Data" class="text-orange"><i class="fas fa-edit"></i></a> |
                                <a href="bnyk_delete.php?id=<?php echo $row['no_nota']; ?>" onclick="return confirm('Yakin ingin hapus ?')" title="Hapus Data" class="text-red"><i class="fas fa-times"></i></a>
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

