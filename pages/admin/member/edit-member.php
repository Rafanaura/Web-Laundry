
<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title></title>
</head>
<body>
<?php 
    include "../../../conn.php";
    $id=$_GET['id_member'];
    $qry_get_member=mysqli_query($conn,"select * from member where id_member =$id");
    $data_member=mysqli_fetch_array($qry_get_member);
    ?>
    <h3>Edit Member</h3>
    <form action="edit-member-post.php" method="post">
    <input type="hidden" name="id_member" value= "<?=$data_member['id_member']?>">
          Nama :
        <input type="text" name="nama" value="<?=$data_member['nama']?>" class="form-control">
       
		Alamat
        <input type="text" name="alamat" value="" class="form-control">
    
        Jenis Kelamin :
        <input type="text" name="jenis_kelamin" value="<?=$data_member['jenis_kelamin']?>" class="form-control">
        Telepon : 
		<input type="text" name="tlp" value="" class="form-control">

			
        <input type="submit" name="simpan" value="Edit Member" class="btn btn-primary">
    </form>
 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>

