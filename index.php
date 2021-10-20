<?php
require 'koneksi.php';
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>User</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">
        <div id="content-wrapper" class="d-flex flex-column">

            <body class="bg-dark">
                <div class="container mt-5">
                    <h1 class="text-center text-dark card=title">User</h1>
                    <table class="table table-light table-striped border border-1 border-secondary">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">USERNAME</th>
                                <th scope="col">No_KTP</th>
                                <th scope="col">No_SIM</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $conn = new mysqli('localhost', 'root', '', 'uts_skd');
                                $sql = "SELECT * FROM user";
                                $result = $conn->query($sql);
                                $count = 0;
                                if ($result->num_rows >  0) {

                                    while ($row = $result->fetch_assoc()) {
                                        $count = $count + 1;
                                ?>


                            <tr>
                                <th><?php echo $count ?></th>
                                <th><?php echo $row["username"] ?></th>
                                <th><?php echo $row["nim"] ?></th>
                                <th><?php echo base64_decode($row["alamat"]) ?></th>

                                <th>
                                    <a href="up" Edit></a><a href="edit.php?id=<?php echo $row["id"] ?>">Edit</a>
                                </th>
                            </tr>
                            <?php

                                    }
                                }

                                ?>
                            <!-- <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                    <a class="btn btn-outline-primary me-md-2" href="register.php" role="button">Tambah
                                        User</a>

                                </div> -->
                            <!-- End of Content Wrapper -->

                </div>
                <!-- End of Page Wrapper -->

                <!-- Scroll to Top Button-->
                <!-- <a class="scroll-to-top rounded" href="#page-top">
                        <i class="fas fa-angle-up"></i>
                    </a> -->

                <!-- Logout Modal-->
                <!-- <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                                <div class="modal-body">Anda yakin ingin Logout</div>
                                <div class="modal-footer">
                                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                    <a class="btn btn-primary" href="login.php">Logout</a> -->
        </div>
    </div>
    </div>
    </div>

</body>

</html>