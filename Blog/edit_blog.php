<?php 
include '../library/koneksi.php';

$id = $_GET['id'];
$query = "SELECT * FROM tbl_blog WHERE id='$id' ";
$hasil = mysqli_query($koneksi, $query);
$data1 = mysqli_fetch_array($hasil);
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
    <form action="update_blog.php" method="GET">
        <input type="hidden" name="id" value="<?= $data1['id']?> ">
        <label>Judul :</label>
        <input type="text" name="judul" value="<?= $data1['judul']?>">
        <br><br>
        <label>Kategori :</label>
        <select name="kategori">
            <?php 
            if ($data1['id_kategori'] == 0) {
            ?>
                <option value="0" selected>Pilih Kategori</option>
            <?php } 
            $query2 = "SELECT * FROM tbl_kategori";
            $hasil2 = mysqli_query($koneksi, $query2);
            while($datakat = mysqli_fetch_array($hasil2)) { ?>
            <?php if($data1['id_kategori'] == $datakat['id']){ ?>
            <option value="<?= $datakat['id'] ?>" selected><?= $datakat['nama_kategori']?></option>
            <?php } else { ?>
            <option value="<?= $datakat['id'] ?>"><?= $datakat['nama_kategori']?></option>
            <?php  } 
            } ?>
        </select>
        <br><br>
        <label>Deskripsi</label> <br>
        <textarea name="deskripsi" cols="30" rows="10"><?= $data1['deskripsi'] ?></textarea>
        <br><br>
        <button type="submit">Simpan</button>
    </form>
</body>

</html>