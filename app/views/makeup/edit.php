<h2>Edit Makeup</h2>

<form action="<?php echo URL; ?>/makeup/update" method="post">
    <input type="hidden" name="makeup_id" value="<?php echo $data['row']['makeup_id']; ?>">
    <table>
        <tr>
            <td>KATEGORI</td>
            <td><input type="kategori" name="kategori" value="<?php echo $data['row']['kategori']; ?>" required></td>
        </tr>
        <tr>
            <td>NAMA</td>
            <td><input type="nama" name="nama" value="<?php echo $data['row']['nama']; ?>" required></td>
        </tr>
        <tr>
            <td>MERK</td>
            <td><input type="merk" name="merk" value="<?php echo $data['row']['merk']; ?>" required></td>
        </tr>
        <tr>
            <td>STOK</td>
            <td><input type="stok" name="stok" value="<?php echo $data['row']['stok']; ?>" required></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_update" value="UPDATE"></td>
        </tr>
    </table>
</form>