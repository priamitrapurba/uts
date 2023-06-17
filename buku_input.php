<h2>Tambah Buku</h2>

<form action="buku_proses.php" method="post">
    <table>
        <tr>
            <td>NO</td>
            <td><input type="text" name="ID_Buku"></td>
        </tr>
        <tr>
            <td>JUDUL</td>
            <td><input type="text" name="Judul"></td>
        </tr>
        <tr>
        <td>PENGARANG</td>
            <td><input type="text" name="Pengarang"></td>
        </tr>
        <tr>
            <td>KATEGORI</td>
            <td><input type="text" name="Kategori"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_simpan" value="SIMPAN"></td>
        </tr>
    </table>
</form>