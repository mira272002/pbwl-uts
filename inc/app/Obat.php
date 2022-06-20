<?php 

class Obat extends Koneksi {

    public function tampil()
    {
        $sql = "SELECT * FROM tb_obat";
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
        $nama = $_POST['nama'];
        $jenis = $_POST['jenis'];
        $keluhan = $_POST['keluhan'];

        $sql = "INSERT INTO tb_obat (nama, jenis, keluhan) VALUES (:kode_obat, nama, jenis, keluhan)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":nama", $nama);
        $stmt->bindParam(":jenis", $jenis);
        $stmt->bindParam(":keluhan", $keluhan);
        $stmt->execute();

    }

    public function edit($id)
    {
        
        $sql = "SELECT * FROM tb_obat WHERE kode_obat=:kode_obat";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":alb_id", $id);
        $stmt->execute();

        $row = $stmt->fetch();

        return $row;
    }

    public function update()
    {
        $nama= $_POST['nama'];
        $jenis= $_POST['jenis'];
        $keluhan= $_POST['keluhan'];
        $kode_obat= $_POST['kode_obat'];

        $sql = "UPDATE tb_obat SET nama=:nama, jenis=:jenis, keluhan=:keluhan WHERE kode_obat=:kode_obat";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":nama", $nama);
        $stmt->bindParam(":jenis", $jenis);
        $stmt->bindParam(":keluhan", $keluhan);
        $stmt->bindParam(":kode_obat", $kode_obat);
        $stmt->execute();

    }

    public function delete($id)
    {
        
        $sql = "DELETE FROM tb_obat WHERE no=:kode_obat";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":kode_obat", $id);
        $stmt->execute();

    }

}
