<?php 
include '../library/koneksi.php';

$judul = $_GET['judul'];
$kategori = $_GET['kategori'];
$deskripsi = $_GET['deskripsi'];

$query = "INSERT INTO  tbl_blog (judul, id_kategori, deskripsi) VALUES ('$judul','$kategori','$deskripsi' )";
$hasil = mysqli_query($koneksi, $query);

if($hasil){
    echo "<script>
        alert('Simpan Data Berhasil!');
        window.location='view_blog.php';
        </script>";
} else {
    echo "<script>
        alert('Simpan Data Gagal!');
        window.location='create_blog.php';
        </script>";
}
