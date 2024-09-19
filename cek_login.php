<?php
session_start();
include 'koneksi.php';

$data_user = $_POST['email'];
$data_password = $_POST['password'];

$query = mysqli_query($koneksi, "Select * from user where email='$data_user' AND password=('$data_password')");
if (mysqli_num_rows($query) == 1) {
    $_SESSION['email'] = $data_user;
    $_SESSION['login'] = true;
    header("location:product.php");
} else {
    echo "<script>
   alert('Email atau Password salah!!!!')
   window.location.replace('index.php')
   </script>";
}
?>