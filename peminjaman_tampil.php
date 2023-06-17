<?php
require_once "inc/Koneksi.php";
require_once "app/peminjaman.php";

$peminjaman = new App\peminjaman();
$rows = $peminjaman->tampil();

?>

<h2>DAFTAR PEMINJAMAN</h2>

<a href="index.php?hal=peminjaman_input" class="btn">Tambah Peminjaman</a>

<table>
    <tr>
        <th>NO</th>
        <th>ID BUKU</th>
        <th>ID ANGGOTA</th>
        <th>TANGGAL PINJAM</th>
        <th>TANGGAL KEMBALI</th>
        <th>EDIT</th>
        <th>DELETE</th>
    </tr>
    <?php foreach ($rows as $row) { ?>
    <tr>
        <td><?php echo $row['ID_Peminjaman']; ?></td>
        <td><?php echo $row['ID_Buku']; ?></td>
        <td><?php echo $row['ID_Anggota']; ?></td>
        <td><?php echo $row['Tanggal_pinjam']; ?></td>
        <td><?php echo $row['Tanggal_kembali']; ?></td>
        <td><a href="index.php?hal=peminjaman_edit&id=<?php echo $row['ID_Peminjaman']; ?>" class="btn">Edit</a></td>
        <td><a href="index.php?hal=peminjaman_delete&id=<?php echo $row['ID_Peminjaman']; ?>" class="btn">Delete</a></td>
    </tr>
    <?php } ?>
</table>
