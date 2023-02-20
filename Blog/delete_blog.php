<?php 
include '../library/koneksi.php';

$id = $_GET['id'];

$query = "DELETE FROM tbl_blog WHERE id='$id'";
$hasil = mysqli_query($koneksi, $query);

if($hasil){
    echo "<script>
        alert('Hapus Data Berhasil!');
        window.location='view_blog.php';
        </script>";
} else {
    echo "<script>
        alert('Hapus Data Gagal!');
        window.location='view_blog.php';
        </script>";
}