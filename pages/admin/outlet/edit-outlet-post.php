<?php

if (isset($_POST['simpan'])) {
    $id=$_POST['id_outlet'];
    $nama_outlet=$_POST['nama'];
    $alamat=$_POST['alamat'];
    $tlp=$_POST['telp'];
   
    if(empty($nama_outlet)){
        echo "<script>alert('nama outlet tidak boleh kosong');location.href='edit-outlet.php';</script>";
 
    } elseif(empty($alamat)){
        echo "<script>alert('alamat tidak boleh kosong');location.href='edit-outlet.php';</script>";
    } elseif(empty($tlp)){
        echo "<script>alert('telepon tidak boleh kosong');location.href='edit-outlet.php';</script>";
    } else {

        include "../../../conn.php";
       
       
            $update=mysqli_query($conn,"UPDATE outlet SET nama_outlet='".$nama_outlet."', alamat='".$alamat."', telp='".$tlp."' WHERE id_outlet = '".$id."'");
            if($update){
                echo "<script>alert('Sukses update outlet');location.href='outlet.php';</script>";
            } else {
                echo "<script>alert('Gagal update outlet');location.href='edit-outlet.php?id_outlet=".$id."';</script>";
            }
        }
    }
    
    

?>
