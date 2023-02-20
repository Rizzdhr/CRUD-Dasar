<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <a href="create_blog.php">Buat Data</a>
        <br><br>
        <thead>
            <tr>
                <th>No</th>
                <th>Judul</th>
                <th>Kategori</th>
                <th>Deskripsi</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            include '../library/koneksi.php';

            $no = 1;
            $query = "SELECT tbl_blog.id, tbl_blog.judul, tbl_kategori.nama_kategori, tbl_blog.deskripsi
                    FROM tbl_blog
                    INNER JOIN tbl_kategori ON tbl_blog.id_kategori=tbl_kategori.id";
            $hasil = mysqli_query($koneksi, $query);
            while($data = mysqli_fetch_array($hasil)){
            ?>
            <tr>
                <td><?= $no; ?></td>
                <td><?= $data['judul']?></td>
                <td><?= $data['nama_kategori']?></td>
                <td><?= $data['deskripsi']?></td>
                <td>
                    <a href="edit_blog.php?id=<?= $data['id']?>">Ubah</a>
                    <a href="delete_blog.php?id=<?= $data['id']?>">Hapus</a>
                </td>
            </tr>
            <?php $no++; 
            }?>
        </tbody>
    </table>
</body>
</html>