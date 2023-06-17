<?php

$anggota = new App\anggota;
$rows = $anggota->tampil();

?>

<h2>DAFTAR ANGGOTA</h2>

<a href="index.php?hal=anggota_input" class="btn">Tambah Anggota</a>

<table>
    <tr>
        <th>NO</th>
        <th>NAMA</th>
        <th>ALAMAT</th>
        <th>EDIT</th>
        <th>DELETE</th>
    </tr>
    <?php foreach ($rows as $row) { ?>
    <tr>
        <td><?php echo $row['ID_Anggota']; ?></td>
        <td><?php echo $row['Nama']; ?></td>
        <td><?php echo $row['Alamat']; ?></td>
        <td><a href="index.php?hal=anggota_edit&id=<?php echo $row['ID_Anggota']; ?>" class="btn">Edit</a></td>
        <td><a href="index.php?hal=anggota_delete&id=<?php echo $row['ID_Anggota']; ?>" class="btn">Delete</a></td>
    </tr>
    <?php } ?>
</table>

