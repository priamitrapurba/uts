<?php

$id = $_GET['id'];
$peminjaman = new App\peminjaman();

$row = $peminjaman->edit($id);
?>

<h2>Edit Peminjaman</h2>

<form action="peminjaman_proses.php" method="post">
    <input type="hidden" name="ID_Peminjaman" value="<?php echo $row['ID_Peminjaman']; ?>">
    <table>
        <tr>
            <td>ID BUKU</td>
            <td>
                <select name="ID_Buku">
                    <?php
                    $buku = new App\buku();
                    $bukuRows = $buku->tampil();
                    foreach ($bukuRows as $bukuRow) {
                        $selected = ($bukuRow['ID_Buku'] == $row['ID_Buku']) ? 'selected' : '';
                        echo '<option value="' . $bukuRow['ID_Buku'] . '" ' . $selected . '>' . $bukuRow['ID_Buku'] . '</option>';
                    }
                    ?>
                </select>
            </td>
        </tr>
                <tr>
            <td>ID ANGGOTA</td>
            <td>
                <select name="ID_Anggota">
                    <?php
                    $anggota = new App\anggota();
                    $anggotaRows = $anggota->tampil();
                    foreach ($anggotaRows as $anggotaRow) {
                        $selected = ($anggotaRow['ID_Anggota'] == $row['ID_Anggota']) ? 'selected' : '';
                        echo '<option value="' . $anggotaRow['ID_Anggota'] . '" ' . $selected . '>' . $anggotaRow['ID_Anggota'] . '</option>';
                    }
                    ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>TANGGAL PINJAM</td>
            <td><input type="date" name="Tanggal_pinjam" value="<?php echo $row['Tanggal_pinjam']; ?>"></td>
        </tr>
        <tr>
            <td>TANGGAL KEMBALI</td>
            <td><input type="date" name="Tanggal_kembali" value="<?php echo $row['Tanggal_kembali']; ?>"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_update" value="UPDATE"></td>
        </tr>
    </table>
</form>
