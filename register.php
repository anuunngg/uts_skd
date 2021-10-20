<?php

require 'koneksi.php';

if (isset($_POST["register"])) {

    if (register($_POST) > 0) {
        header('location:login.php');
        echo "
            <script>
                alert('registrasi akun berhasil');
            </script>
        ";
    } else {
        echo mysqli_error($conn);
    }
}

?>




<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.83.1">
    <title>Daftar Akun</title>
    <link rel="shortcut icon" type="image/png" href="assets/brand/Sastro-removebg-preview.png">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sign-in/">
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">



    <!-- Bootstrap core CSS -->
    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">



    <!-- Custom styles for this template -->
    <link href="assets/dist/css/signin.css" rel="stylesheet">
</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <!-- <div class="col-lg-6 d-none d-lg-block bg-login-image"></div> -->
                            <div class="col-lg">
                                <div class="p-5">
                                    <!-- <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Silahkan Login</h1>
                                    </div> -->
                                    <main class="form-signin">
                                        <form method="post">
                                            <!-- <img class="mb-4 text-center" src="img/undraw_profile.svg" alt=""
                                                width="135px" height="150px"> -->
                                            <h1 class="h3 mb-3 fw-normal">Silahkan Daftar</h1>

                                            <div class="form-floating">
                                                <label for="floatingInput">Username</label>
                                                <input type="text" class="form-control" autocomplete="off"
                                                    name="username" placeholder="Masukkan Username">
                                            </div>
                                            <div class="form-floating">
                                                <label for="floatingPassword">NIM</label>
                                                <input type="password" class="form-control" name="nim"
                                                    placeholder="Masukkan NIM">
                                            </div>
                                            <div class="form-floating">
                                                <label for="floatingPassword">Re-type Nim</label>
                                                <input type="password" class="form-control" name="nim2"
                                                    placeholder="tulis Ulang NIM">
                                            </div>
                                            <div class="form-floating">
                                                <label for="floatingPassword">Alamat</label>
                                                <input type="text" class="form-control" name="alamat"
                                                    placeholder="Masukan Alamat">
                                            </div>
                                            <br>
                                            <br>
                                            <button class="w-100 btn btn-lg btn-primary" type="submit"
                                                name="register">Daftar</button>
                                        </form>
                                    </main>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>