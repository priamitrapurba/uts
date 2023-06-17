<?php

namespace App;
use inc\Koneksi as Koneksi;

class Peminjaman extends Koneksi {

    public function tampil()
    {
        $sql = "SELECT * FROM peminjaman";
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
        $idBuku = $_POST['ID_Buku'];
        $idAnggota = $_POST['ID_Anggota'];
        $tanggalPinjam = $_POST['Tanggal_pinjam'];
        $tanggalKembali = $_POST['Tanggal_kembali'];

        $sql = "INSERT INTO peminjaman (ID_Buku, ID_Anggota, Tanggal_pinjam, Tanggal_kembali) VALUES ( :ID_Buku,:ID_Anggota,:Tanggal_pinjam, :Tanggal_kembali)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":ID_Buku", $idBuku);
        $stmt->bindParam(":ID_Anggota", $idAnggota);
        $stmt->bindParam(":Tanggal_pinjam", $tanggalPinjam);
        $stmt->bindParam(":Tanggal_kembali", $tanggalKembali);
        $stmt->execute();
    }

    public function edit($id)
    {
        $sql = "SELECT * FROM peminjaman WHERE ID_Peminjaman = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":id", $id);
        $stmt->execute();

        $row = $stmt->fetch();

        return $row;
    }

  public function update()
{
    $idPeminjaman = $_POST['ID_Peminjaman'];
    $idBuku = $_POST['ID_Buku'];
    $idAnggota = $_POST['ID_Anggota'];
    $tanggalPinjam = $_POST['Tanggal_pinjam'];
    $tanggalKembali = $_POST['Tanggal_kembali'];

    $sql = "UPDATE peminjaman SET ID_Buku = :ID_Buku, ID_Anggota = :ID_Anggota, Tanggal_pinjam = :Tanggal_pinjam, Tanggal_kembali = :Tanggal_kembali WHERE ID_Peminjaman = :ID_Peminjaman";
    $stmt = $this->db->prepare($sql);
    $stmt->bindParam(":ID_Peminjaman", $idPeminjaman);
    $stmt->bindParam(":ID_Buku", $idBuku);
    $stmt->bindParam(":ID_Anggota", $idAnggota);
    $stmt->bindParam(":Tanggal_pinjam", $tanggalPinjam);
    $stmt->bindParam(":Tanggal_kembali", $tanggalKembali);
    $stmt->execute();
}


    public function delete($id)
    {
        $sql = "DELETE FROM peminjaman WHERE ID_Peminjaman = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":id", $id);
        $stmt->execute();
    }

}
