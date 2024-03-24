<form action="" method="post">
    nama barang : <input type="text" name="namabarang">
    harga : <input type="text" name="harga">
    <input type="submit" name="simpan" value="simpan">
</form>

<?php
if(isset($_POST['simpan']))
{
    $barang = $_POST['namabarang'];
    $harga = $_POST['harga'];

    echo "Nama Barang: $barang<br>";
    echo "Harga: $harga<br>";
}
?>
