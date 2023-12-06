<h2>Input Data Makeup</h2>

<form action="<?php echo URL; ?>/makeup/save" method="post">
    <table>
        <tr>
            <td>KATEGORI</td>
            <td><input type="kategori" name="kategori" required></td>
        </tr>
        <tr>
            <td>NAMA</td>
            <td><input type="nama" name="nama" required></td>
        </tr>
        <tr>
            <td>MERK</td>
            <td><input type="merk" name="merk" required></td>
        </tr>
        <tr>
            <td>STOK</td>
            <td><input type="stok" name="stok" required></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_save" value="SAVE"></td>
        </tr>
    </table>
</form>