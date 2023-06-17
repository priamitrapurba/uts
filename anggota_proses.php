<?php

require_once "inc/Koneksi.php";
require_once "app/anggota.php";

$anggota = new App\anggota();

if (isset($_POST['btn_simpan'])) {
    $anggota->simpan();
    header("location:index.php?hal=anggota_tampil");
}

if (isset($_POST['btn_update'])) {
    $anggota->update();
    header("location:index.php?hal=anggota_tampil");
}
