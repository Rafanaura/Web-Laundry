<?php 
$id = $_GET['id_user'];
    if($id){
        include "../../../conn.php";
        $qry_hapus=mysqli_query($conn,"delete from user where id_user='".$_GET['id_user']."'");
        if($qry_hapus){
            echo "<script>alert('Sukses hapus user');location.href='user.php';</script>";
        } else {
            echo "<script>alert('Gagal hapus user');location.href='delete-user.php';</script>";
        }
    }
?>
