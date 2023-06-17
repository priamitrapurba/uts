<?php

require_once "inc/Koneksi.php";
require_once "app/buku.php";

$buku = new App\buku();

if (isset($_POST['btn_simpan'])) {
    $buku->simpan();
    header("location:index.php?hal=buku_tampil");
}

if (isset($_POST['btn_update'])) {
    $buku->update();
    header("location:index.php?hal=buku_tampil");
}