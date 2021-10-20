<?php
require "koneksi.php";

//panggil koneksi data base
$pass = md5($_POST['nim']);
$username = mysqli_escape_string($conn, $_POST['username']);
$password = mysqli_escape_string($conn, $pass);

$cek_user = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");
$user_valid = mysqli_fetch_array($cek_user);

if ($user_valid) {
    if ($password == $user_valid['nim']) {
        session_start();

        $_SESSION['username'] = $user_valid['username'];

        header('location:index.php');
    }
    echo "<script>alert('Password tidak Sesuai!!')
    document.location='login.php'</script>";
} else {
    echo "<script>alert('Username tidak terdaftar!!')
    document.location='login.php'</script>";
}