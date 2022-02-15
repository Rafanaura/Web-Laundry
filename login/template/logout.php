<?php 
    session_start();
    unset($_SESSION['id_user']);
    unset($_SESSION['nama_user']);
    unset($_SESSION['username']);
    unset($_SESSION['role']);
    header("location: sign-in.php");
?>