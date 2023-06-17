<h2>Tambah Peminjaman</h2>

<form action="peminjaman_proses.php" method="post">
    <table>
         <tr>
            <td>ID BUKU</td>
            <td>
                <select name="id_buku">
                    <?php
                    $buku = new App\buku;
                    $bukuRows = $buku->tampil();

                    foreach ($bukuRows as $bukuRow) {
                        echo '<option value="' . $bukuRow['ID_Buku'] . '">' . $bukuRow['ID_Buku'] . '</option>';
                    }
                    ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>ID ANGGOTA</td>
            <td>
                <select name="id_anggota">
                    <?php
                    $anggota = new App\anggota;
                    $anggotaRows = $anggota->tampil();

                    foreach ($anggotaRows as $anggotaRow) {
                        echo '<option value="' . $anggotaRow['ID_Anggota'] . '">' . $anggotaRow['ID_Anggota'] . '</option>';
                    }
                    ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>TANGGAL PINJAM</td>
            <td><input type="date" name="Tanggal_pinjam"></td>
        </tr>
        <tr>
            <td>TANGGAL KEMBALI</td>
            <td><input type="date" name="Tanggal_kembali"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_simpan" value="SIMPAN"></td>
        </tr>
    </table>
</form>
