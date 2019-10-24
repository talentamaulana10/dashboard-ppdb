<?php
session_start();
include 'koneksi.php';
$username = $_POST['txtuserID'];
$password = $_POST['password'];
$postlog = mysqli_query($koneksi,"INSERT INTO log_user (username) VALUES('$username')");
$data = mysqli_query($koneksi, "SELECT * FROM user WHERE user_id='$username' and password='$password' ");
$cek = mysqli_num_rows($data);
if($cek>0){
    $_SESSION['user_id'] = $username;
    $_SESSION['status'] = "login";
    header("location:home.php");
}
else{
    header("location:login.php?pesan=gagal");
}
?>