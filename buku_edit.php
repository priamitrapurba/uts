<?php

$id = $_GET['id'];
$buku = new App\buku();

$row = $buku->edit($id);
?>

<h2>Edit Buku</h2>

<form action="buku_proses.php" method="post">
    <input type="hidden" name="ID_Buku" value="<?php echo $row['ID_Buku']; ?>">
    <table>
        <tr>
            <td>JUDUL</td>
            <td><input type="text" name="Judul" value="<?php echo $row['Judul']; ?>"></td>
        </tr>
        <tr>
            <td>PENGARANG</td>
            <td><textarea name="Pengarang" id="" cols="30" rows="10"><?php echo $row['Pengarang']; ?></textarea></td>
        </tr>        
        <tr>
            <td>KATEGORI</td>
            <td><textarea name="Kategori" id="" cols="30" rows="10"><?php echo $row['Kategori']; ?></textarea></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_update" value="UPDATE"></td>
        </tr>
    </table>
</form>