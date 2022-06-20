<?php 

class Pembeli extends Koneksi {

    public function tampil()
    {
        $sql = "SELECT * FROM tb_pembeli";
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
        $total = $_POST['total'];

        $sql = "INSERT INTO tb_pembeli (nama, total) VALUES (:no_nota, nama, total)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":nama", $nama);
        $stmt->bindParam(":total", $total);
        $stmt->execute();

    }

    public function edit($id)
    {
        
        $sql = "SELECT * FROM tb_pembeli WHERE no_nota=:no_nota";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":alb_id", $id);
        $stmt->execute();

        $row = $stmt->fetch();

        return $row;
    }

    public function update()
    {
        $nama = $_POST['nama'];
        $total= $_POST['total'];
        $no_nota= $_POST['no_nota'];

        $sql = "UPDATE tb_pembeli SET nama=:nama, total=:total WHERE no_nota=:no_nota";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":nama", $nama);
        $stmt->bindParam(":total", $total);
        $stmt->bindParam(":no_nota", $no_nota);
        $stmt->execute();

    }

    public function delete($id)
    {
        
        $sql = "DELETE FROM tb_pembeli WHERE no=:no_nota";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":no_nota", $id);
        $stmt->execute();

    }

}

