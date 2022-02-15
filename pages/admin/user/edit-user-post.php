<?php

if (isset($_POST['simpan'])) {
    $id=$_POST['id_user'];
    $nama_user=$_POST['nama'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $role=$_POST['role'];
   
    if(empty($nama_user)){
        echo "<script>alert('nama user tidak boleh kosong');location.href='edit-user.php';</script>";
 
    } elseif(empty($username)){
        echo "<script>alert('username tidak boleh kosong');location.href='edit-user.php';</script>";
    } elseif(empty($password)){
        echo "<script>alert('password tidak boleh kosong');location.href='edit-user.php';</script>";
    } elseif(empty($role)){
        echo "<script>alert('role tidak boleh kosong');location.href='edit-user.php';</script>";
    } else {

        include "../../../conn.php";
       
       
            $update=mysqli_query($conn,"UPDATE user SET nama='".$nama_user."', username='".$username."', password='".md5($password)."', role='".$role."' WHERE id_user = '".$id."'");
            if($update){
                echo "<script>alert('Sukses update user');location.href='user.php';</script>";
            } else {
                echo "<script>alert('Gagal update user');location.href='edit-user.php?id_user=".$id."';</script>";
            }
        }
    }
    
    

?>
