<?php

$server = "localhost";
$user = "root";
$password = "";
$database = "uts_skd";

$conn = mysqli_connect($server, $user, $password, $database) or die(mysqli_error($conn));

function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function register($data)
{
    global $conn;
    $username = strtolower($data["username"]);
    $password = mysqli_escape_string($conn, $data["nim"]);
    $password2 = mysqli_escape_string($conn, $data["nim2"]);
    $alamat = mysqli_escape_string($conn, $data["alamat"]);

    $result = mysqli_query($conn, "SELECT username FROM user 
                                    WHERE username = '$username'");
    if (mysqli_fetch_assoc($result)) {
        echo "
        <script>
            alert('username sudah digunakan');
        </script>
        ";
        return false;
    }
    if ($password != $password2) {
        echo "
        <script>
            alert('NIM tidak sesuai');
        </script>
        ";
    } else {
        $password = md5($password);
        $saved = mysqli_query($conn, "INSERT INTO user VALUES ('','$username','$password','$alamat')");
        return mysqli_affected_rows($conn);
    }
}