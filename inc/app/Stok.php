<?php 

class Stok extends Koneksi {

    public function tampil()
    {
        $sql = "SELECT * FROM tb_stok";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();

        $data = [];

        while ($rows = $stmt->fetch()) {
            $data[] = $rows;
        }

        return $data;
    }

    public function simpan()
    {
        $stok = $_POST['stok'];
        $harga = $_POST['harga'];

        $sql = "INSERT INTO tb_stok (stok, harga) VALUES (:kode_obat, stok, harga)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":stok", $stok);
        $stmt->bindParam(":harga", $harga);
        $stmt->execute();

    }

    public function edit($id)
    {
        
        $sql = "SELECT * FROM tb_stok WHERE kode_obat=:kode_obat";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":kode_obat", $id);
        $stmt->execute();

        $row = $stmt->fetch();

        return $row;
    }

    public function update()
    {
        $stok= $_POST['stok'];
        $harga= $_POST['harga'];
        $kode_obat= $_POST['kode_obat'];

        $sql = "UPDATE tb_stok SET stok=:stok, harga=:harga WHERE kode_obat=:kode_obat";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":stok", $stok);
        $stmt->bindParam(":harga", $harga);
        $stmt->bindParam(":kode_obat", $kode_obat);
        $stmt->execute();

    }

    public function delete($id)
    {
        
        $sql = "DELETE FROM tb_stok WHERE no=:kode_obat";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":kode_obat", $id);
        $stmt->execute();

    }

}

