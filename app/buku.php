<?php

namespace App;
use Inc\Koneksi as Koneksi;

class buku extends Koneksi {

    public function tampil()
    {
        $sql = "SELECT * FROM buku";
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
        $judul = $_POST['Judul'];
        $pengarang = $_POST['Pengarang'];
        $kategori = $_POST['Kategori'];

        $sql = "INSERT INTO buku (Judul, Pengarang, Kategori) VALUES (:Judul, :Pengarang, :Kategori)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":Judul", $judul);
        $stmt->bindParam(":Pengarang", $pengarang);
        $stmt->bindParam(":Kategori", $kategori);
        $stmt->execute();

    }

    public function edit($id)
    {

        $sql = "SELECT * FROM buku WHERE ID_Buku=:ID_Buku";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":ID_Buku", $id);
        $stmt->execute();

        $row = $stmt->fetch();

        return $row;
    }

    public function update()
    {
        $judul = $_POST['Judul'];
        $pengarang = $_POST['Pengarang'];
        $kategori = $_POST['Kategori'];
        $id = $_POST['ID_Buku'];

        $sql = "UPDATE buku SET Judul=:Judul, Pengarang=:Pengarang, Kategori=:Kategori WHERE ID_Buku=:ID_Buku";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":Judul", $judul);
        $stmt->bindParam(":Pengarang", $pengarang);
        $stmt->bindParam(":Kategori", $kategori);
        $stmt->bindParam(":ID_Buku", $id);
        $stmt->execute();

    }

    public function delete($id)
    {

        $sql = "DELETE FROM buku WHERE ID_Buku=:ID_Buku";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":ID_Buku", $id);
        $stmt->execute();

    }

}