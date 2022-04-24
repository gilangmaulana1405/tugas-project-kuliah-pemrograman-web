<?php
require 'config.php';
if(!empty($_SESSION["id"])){
  header("Location: index.php");
}
if(isset($_POST["submit"])){
  $usernameemail = $_POST["usernameemail"];
  $password = $_POST["password"];
  $result = mysqli_query($conn, "SELECT * FROM tb_user WHERE username = '$usernameemail' OR email = '$usernameemail'");
  $row = mysqli_fetch_assoc($result);
  if(mysqli_num_rows($result) > 0){
    if($password == $row['password']){
      $_SESSION["login"] = true;
      $_SESSION["id"] = $row["id"];
      header("Location: index.php");
    }
    else{
      echo
      "<script> alert('Password salah!'); </script>";
    }
  }
  else{
    echo
    "<script> alert('User tidak terdaftar!'); </script>";
  }
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  </head>
  <body>
    
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-4 mt-5">
           <form class="" action="" method="post" autocomplete="off">
            <h1 class="h3 mb-3 fw-normal text-center">Login</h1>

           <div class="form-floating">
               <input type="text" name="usernameemail" class="form-control" id = "usernameemail" required value="">
               <label for="usernameemail">Username</label>
            </div>

            <div class="form-floating">
              <input type="password" name="password" class="form-control" id = "password" required value="">
              <label for="password">Password : </label>
            </div>
            
            <button type="submit" class="w-100 btn btn-lg btn-primary mt-3" name="submit">Login</button>
          </form>

          <p class="mt-3 text-center">Belum punya akun? silahkan <a href="registration.php">daftar akun!</a></p>

        </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
    
  </body>
</html>


   
