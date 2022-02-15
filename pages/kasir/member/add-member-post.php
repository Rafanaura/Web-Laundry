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
    $nama=$_POST['nama'];
    $alamat =$_POST['alamat'];
    $jk=$_POST['jenis_kelamin'];
    $telepon=$_POST['telp'];

    if(empty($nama)){
        echo "<script>alert('nama tidak boleh kosong');
        location.href='add-member.php';</script>";
    } elseif (empty($alamat)) {
        echo "<script>alert('username tidak boleh kosong');
        location.href='add-member.php';</script>";
   
    } else {
        include "../../../conn.php";

        $insert=mysqli_query($conn, "insert into member (nama, alamat, jenis_kelamin, tlp) value ('".$nama."','".$alamat."','".$jk."','".$telepon."')");

        if ($insert) {
            echo "<script>alert('Sukses menambahkan member');
            location.href='member.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan member');
            location.href='add-member.php';</script>";
        }
    }
}
?>