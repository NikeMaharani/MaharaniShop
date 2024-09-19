<?php
include "koneksi.php";

$nama_produk = $_POST['nama_produk'];
$deskripsi = $_POST['deskripsi_singkat'];
$harga = $_POST['harga'];
$stok = $_POST['stock'];

$query = mysqli_query($koneksi, "INSERT INTO products VALUES (null, '$nama_produk', '$deskripsi', '$harga', '$stok')");
if ($query) {
    echo "<script>
    alert('Produk Berhasil di Tambahkan!!')
    window.location.replace('product.php')
    </script>";
} else {
    echo "<script>
    alert('Produk gagal di Tambahkan')
    window.location.replace('add_product.php')
    </script>";
}
?>