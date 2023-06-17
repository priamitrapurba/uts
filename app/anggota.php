<?php

namespace App;
use Inc\Koneksi as Koneksi;

class anggota extends Koneksi {

    public function tampil()
    {
        $sql = "SELECT * FROM anggota";
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
        $nama = $_POST['Nama'];
        $alamat = $_POST['Alamat'];

        $sql = "INSERT INTO anggota (Nama, Alamat) VALUES (:Nama, :Alamat)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":Nama", $nama);
        $stmt->bindParam(":Alamat", $alamat);
        $stmt->execute();

    }

    public function edit($id)
    {

        $sql = "SELECT * FROM anggota WHERE ID_Anggota=:ID_Anggota";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":ID_Anggota", $id);
        $stmt->execute();

        $row = $stmt->fetch();

        return $row;
    }

    public function update()
    {
        $nama = $_POST['Nama'];
        $alamat = $_POST['Alamat'];
        $id = $_POST['ID_Anggota'];

        $sql = "UPDATE anggota SET Nama=:Nama, Alamat=:Alamat WHERE ID_Anggota=:ID_Anggota";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":Nama", $nama);
        $stmt->bindParam(":Alamat", $alamat);
        $stmt->bindParam(":ID_Anggota", $id);
        $stmt->execute();

    }

    public function delete($id)
    {

        $sql = "DELETE FROM anggota WHERE ID_Anggota=:ID_Anggota";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":ID_Anggota", $id);
        $stmt->execute();

    }

}
