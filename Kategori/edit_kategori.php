<?php 
include '../library/koneksi.php';

$id = $_GET['id'];
$query = "SELECT * FROM tbl_kategori WHERE id='$id' ";
$hasil = mysqli_query($koneksi, $query);
$data = mysqli_fetch_array($hasil);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Kategori</title>
</head>
<body>
    <form action="update_kategori.php" method="GET">
        <input type="hidden" name="id" value="<?= $data['id']?> ">
        <label>Nama Kategori :</label>
        <input type="text" name="nam_kat" value="<?= $data['nama_kategori']?>">
        <br><br>
        <button type="submit">Simpan</button>
    </form>
</body>
</html>