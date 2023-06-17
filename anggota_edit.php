<?php

$id = $_GET['id'];
$anggota = new App\anggota();

$row = $anggota->edit($id);
?>

<h2>Edit Anggota</h2>

<form action="anggota_proses.php" method="post">
    <input type="hidden" name="ID_Anggota" value="<?php echo $row['ID_Anggota']; ?>">
    <table>
        <tr>
            <td>NAMA</td>
            <td><input type="text" name="Nama" value="<?php echo $row['Nama']; ?>"></td>
        </tr>
        <tr>
            <td>ALAMAT</td>
            <td><textarea name="Alamat" id="" cols="30" rows="10"><?php echo $row['Alamat']; ?></textarea></td>
        </tr>      
        <tr>
            <td></td>
            <td><input type="submit" name="btn_update" value="UPDATE"></td>
        </tr>
    </table>
</form>
