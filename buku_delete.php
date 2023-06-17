<?php

$id = $_GET['id'];

$buku = new App\buku();
$rows = $buku->delete($id);

?>

<div class="info">
      Data berhasil dihapus!
      <a href="index.php?=buku_tampil">Kembali</a>
</div>