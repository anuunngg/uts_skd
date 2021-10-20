<?php
session_start();
unset($_SESSION['username']);
unset($_SESSION['nim']);

session_destroy();
echo "<script>alert('Anda telah Logout');document.location='login.php'</script>";