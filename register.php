<?php 
    include_once("koneksi.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="register.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
</head>
<body class="body" >
<div class="body-form" >
<form class="text-center p-5" action="" method="post">

<p class="h4 mb-4">register</p>

<div class="form-row mb-4">
    <div class="col">

        <input name="txtemail" type="text" class="form-control" required placeholder="Email">
    </div>
    <div class="col">
        
        <input type="text" name="txtnamalengkap" class="form-control" required placeholder="Nama Lengkap">
    </div>
</div>

<input type="text" class="form-control" name="txtuserID" placeholder="User ID" required aria-describedby="defaultRegisterFormPhoneHelpBlock">

<small class="form-text text-muted mb-4">
    user id harus berisikan angka
</small>

<input type="password" name="txtpassword" class="form-control mb-4" required placeholder="Password">


<input name="repeat_password" type="password" onchange="handleCange()"  class="form-control" placeholder="Ketik Ulang Password" aria-describedby="defaultRegisterFormPasswordHelpBlock">

<button class="btn btn-info my-4 btn-block" name="btnkirim" type="submit">Daftar</button>
<div>
<p>sudah punya akun ?
    <span><a href="login.php">login</a></span>
</p>
</div>
</form>

</div>
</body>
</html>
<?php

    
  
    $koneksi = mysqli_connect("localhost","kevin","123","dashboard");
    include_once("koneksi.php");
    if(isset($_POST['btnkirim'])) {
      $txtemail = $_POST['txtemail'];
      $txtnamalengkap = $_POST['txtnamalengkap'];
      $txtuserID = $_POST['txtuserID'];
      $txtpassword = $_POST['txtpassword'];
      $repeat_password = $_POST['repeat_password'];
      
     if($repeat_password !== $txtpassword ){
        echo "<script type='text/javascript'>alert('salah');</script>";
     }
     else{
        mysqli_query($koneksi,"INSERT INTO user (user_id,password,email,nama) VALUES('$txtuserID','$txtpassword','$txtemail','$txtnamalengkap')");
        header("location:login.php");
     }
     
   }
   
?> 