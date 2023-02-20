<?php 
include '../library/koneksi.php';

$nama_kategori = $_GET ['nam_kat'];

$query = "INSERT INTO tbl_kategori(nama_kategori) VALUES('$nama_kategori')";
$hasil = mysqli_query($koneksi, $query);

if($hasil){
    echo "<script>
        alert('Simpan Data Berhasil!');
        window.location='view_kategori.php';
        </script>";
} else {
    echo "<script>
        alert('Simpan Data Gagal!');
        window.location='create_kategori.php';
        </script>";
}
?>