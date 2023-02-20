<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Blog</title>
</head>
<body>
    <form action="insert_blog.php" method="GET">
        <label>Judul :</label>
        <input type="text" name="judul">
        <br><br>
        <label>Kategori : </label>
        <select name="kategori">
            <?php 
            include '../library/koneksi.php';

            $query = "SELECT * FROM tbl_kategori";
            $hasil = mysqli_query($koneksi, $query);
            while($data = mysqli_fetch_array($hasil)) {
            ?>
            <option value="<?= $data['id'] ?>"><?= $data['nama_kategori'] ?></option>
            <?php } ?>
        </select>
        <br><br>
        <label>Deskripsi</label> <br>
        <textarea name="deskripsi" cols="30" rows="10"></textarea>
        <br><br>
        <button type="submit">Simpan</button>
    </form>
</body>
</html>