
<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title></title>
</head>
<body>
<?php 
    include "../../../conn.php";
    $id=$_GET['id_user'];
    $qry_get_user=mysqli_query($conn,"select * from user where id_user =$id");
    $data_user=mysqli_fetch_array($qry_get_user);
    ?>
    <h3>Edit User</h3>
    <form action="edit-user-post.php" method="post">
    <input type="hidden" name="id_user" value= "<?=$data_user['id_user']?>">
          Nama :
        <input type="text" name="nama" value="<?=$data_user['nama']?>" class="form-control">
       
        Username : 
        <input type="text" name="username" value="" class="form-control">
        
        Password
        <input type="password" name="password" value="" class="form-control">
		
        Role :
				<input type="text" name="role" value="<?=$data_user['role']?>" class="form-control">
			
        <input type="submit" name="simpan" value="Edit User" class="btn btn-primary">
    </form>
 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>

