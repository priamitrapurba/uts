<?php

$id = $_GET['id'];

$anggota = new App\anggota();
$rows = $anggota->delete($id);

?>

<div class="info">
      Data berhasil dihapus!
      <a href="index.php?hal=anggota_tampil">Kembali</a>
</div>
