<?php

$buku = new App\buku;
$rows = $buku->tampil();

?>

<h2>DAFTAR BUKU</h2>

<a href="index.php?hal=buku_input" class="btn">Tambah Buku</a>

<table>
    <tr>
        <th>NO</th>
        <th>JUDUL</th>
        <th>PENGARANG</th>
        <th>KATEGORI</th>
        <th>EDIT</th>
        <th>DELETE</th>
    </tr>
    <?php foreach ($rows as $row) { ?>
    <tr>
        <td><?php echo $row['ID_Buku']; ?></td>
        <td><?php echo $row['Judul']; ?></td>
        <td><?php echo $row['Pengarang']; ?></td>
        <td><?php echo $row['Kategori']; ?></td>
        <td><a href="index.php?hal=buku_edit&id=<?php echo $row['ID_Buku']; ?>" class="btn">Edit</a></td>
        <td><a href="index.php?hal=buku_delete&id=<?php echo $row['ID_Buku']; ?>" class="btn">Delete</a></td>
    </tr>
    <?php } ?>
</table>
