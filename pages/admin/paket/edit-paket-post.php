<?php

if (isset($_POST['simpan'])) {
    $id=$_POST['id_paket'];
    $jenis=$_POST['jenis'];
    $harga=$_POST['harga'];
   
    if(empty($jenis)){
        echo "<script>alert('jenis tidak boleh kosong');location.href='edit-paket.php';</script>";
 
    } elseif(empty($harga)){
        echo "<script>alert('harga tidak boleh kosong');location.href='edit-paket.php';</script>";
   
    } else {

        include "../../../conn.php";
       
       
            $update=mysqli_query($conn,"UPDATE paket SET jenis='".$jenis."', harga='".$harga."' WHERE id_paket = '".$id."'");
            if($update){
                echo "<script>alert('Sukses update paket');location.href='paket.php';</script>";
            } else {
                echo "<script>alert('Gagal update paket');location.href='edit-paket.php?id_paket=".$id."';</script>";
            }
        }
    }
    
    

?>
