<?php
require 'config.php';
if(!empty($_SESSION["id"])){
  header("Location: index.php");
}
if(isset($_POST["submit"])){
  $name = $_POST["name"];
  $username = $_POST["username"];
  $email = $_POST["email"];
  $password = $_POST["password"];
  $confirmpassword = $_POST["confirmpassword"];
  $duplicate = mysqli_query($conn, "SELECT * FROM tb_user WHERE username = '$username' OR email = '$email'");
  if(mysqli_num_rows($duplicate) > 0){
    echo
    "<script> alert('Username or Email Has Already Taken'); </script>";
  }
  else{
    if($password == $confirmpassword){
      $query = "INSERT INTO tb_user VALUES('','$name','$username','$email','$password')";
      mysqli_query($conn, $query);
      echo
      "<script> alert('Registrasi berhasil!'); </script>";
      header("Location: login.php");
    }
    else{
      echo
      "<script> alert('Password tidak cocok!'); </script>";
    }
  }
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  </head>
  <body>

   <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-4 mt-5">
          <form class="" action="" method="post" autocomplete="off">

          <h1 class="h3 mb-3 fw-normal text-center">Registrasi</h1>

          <div class="form-floating">
            <input type="text" class="form-control" name="name" id = "name" required value="">
            <label for="name">Name : </label>
          </div>

          <div class="form-floating">
            <input type="text" class="form-control" name="username" id = "username" required value=""> 
            <label for="username">Username : </label>
          </div>

          <div class="form-floating">
            <input type="email" class="form-control" name="email" id = "email" required value="">
            <label for="email">Email : </label>
          </div>

          <div class="form-floating">
            <input type="password" class="form-control" name="password" id = "password" required value="">
            <label for="password">Password : </label>
          </div>

          <div class="form-floating">
            <input type="password" class="form-control" name="confirmpassword" id = "confirmpassword" required value="">
            <label for="confirmpassword">Confirm Password : </label>
          </div>

          <button type="submit"  class="w-100 btn btn-lg btn-primary mt-3" name="submit">Register</button>

          </form>

          <p class="text-center mt-3">Sudah punya akun? silahkan <a href="login.php">Login!</a></p>

        </div>
      </div>
   </div>
    
  </body>
</html>
