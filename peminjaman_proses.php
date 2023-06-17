<?php

require_once "inc/Koneksi.php";
require_once "app/peminjaman.php";

$peminjaman = new App\peminjaman();

if (isset($_POST['btn_simpan'])) {
    $peminjaman->simpan();
    header("location:index.php?hal=peminjaman_tampil");
}

if (isset($_POST['btn_update'])) {
    $peminjaman->update();
    header("location:index.php?hal=peminjaman_tampil");
}
