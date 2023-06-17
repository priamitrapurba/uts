<?php

$id = $_GET['id'];

$peminjaman = new App\peminjaman();
$rows = $peminjaman->delete($id);

?>

<div class="info">
      Data berhasil dihapus!
      <a href="index.php?hal=peminjaman_tampil">Kembali</a>
</div>
