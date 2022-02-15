<?php 
$id = $_GET['id_outlet'];
    if($id){
        include "../../../conn.php";
        $qry_hapus=mysqli_query($conn,"delete from outlet where id_outlet='".$_GET['id_outlet']."'");
        if($qry_hapus){
            echo "<script>alert('Sukses hapus outlet');location.href='outlet.php';</script>";
        } else {
            echo "<script>alert('Gagal hapus outlet');location.href='delete-outlet.php';</script>";
        }
    }
?>
