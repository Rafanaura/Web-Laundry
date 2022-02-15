<?php 
$id = $_GET['id_paket'];
    if($id){
        include "../../../conn.php";
        $qry_hapus=mysqli_query($conn,"delete from paket where id_paket='".$_GET['id_paket']."'");
        if($qry_hapus){
            echo "<script>alert('Sukses hapus user');location.href='paket.php';</script>";
        } else {
            echo "<script>alert('Gagal hapus user');location.href='delete-paket.php';</script>";
        }
    }
?>
