<?php
include "koneksi.php";

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

$query = mysqli_query($koneksi, "INSERT INTO user VALUES (null, '$username', '$email', '$password', null)");
if ($query) {
    echo "<script>
    alert('Simpan data Berhasil!')
    window.location.replace('index.php')
    </script>";
} else {
    echo "<script>
    alert('Simpan data Gagal!')
    window.location.replace('register.php')
    </script>";
}
?>