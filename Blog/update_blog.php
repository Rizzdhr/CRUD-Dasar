<?php 
include '../library/koneksi.php';

$id = $_GET['id'];
$judul = $_GET['judul'];
$kategori = $_GET['kategori'];
$deskripsi = $_GET['deskripsi'];

$query = "UPDATE tbl_blog SET judul='$judul', id_kategori='$kategori', deskripsi='$deskripsi' WHERE id='$id' ";
$hasil = mysqli_query($koneksi, $query);

if($hasil){
    echo "<script>
        alert('Edit Data Berhasil!');
        window.location='view_blog.php';
        </script>";
} else {
    echo "<script>
        alert('Edit Data Gagal!');
        window.location='create_blog.php';
        </script>";
}