<?php
    // if (!isset($_SESSION)) {
    //     session_start();
    // }

    // if ($_SESSION['role']=="kasir") {
    //     echo "<script>location.href='../sign-in.php';</script>";
    // } elseif ($_SESSION['role']=="owner") {
    //     echo "<script>location.href='../sign-in.php';</script>";
    // }

if ($_POST) {
    $nama_outlet=$_POST['nama'];
    $alamat =$_POST['alamat'];
    $telepon=$_POST['tlp'];

    if(empty($nama_outlet)){
        echo "<script>alert('nama outlet tidak boleh kosong');
        location.href='add-outlet.php';</script>";
    } elseif (empty($alamat)) {
        echo "<script>alert('alamat tidak boleh kosong');
        location.href='add-outlet.php';</script>";
    } elseif (empty($telepon)) {
        echo "<script>alert('telepon tidak boleh kosong');
        location.href='add-outlet.php';</script>";
    
    } else {
        include "../../../conn.php";

        $insert=mysqli_query($conn, "insert into outlet (nama_outlet, alamat, telp) value ('".$nama_outlet."','".$alamat."','".$telepon."')");

        if ($insert) {
            echo "<script>alert('Sukses menambahkan outlet');
            location.href='outlet.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan outlet');
            location.href='add-outlet.php';</script>";
        }
    }
}
?>