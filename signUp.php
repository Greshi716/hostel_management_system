<?php
$showAlert=false;
$showError=false;
if($_SERVER['REQUEST_METHOD']=='POST'){
    include "_db.php";
    $username = $_POST['username'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    $sql1="SELECT * FROM `signup` WHERE username='$username'";
    $result=mysqli_query($conn,$sql1);
    $num1=mysqli_num_rows($result);
    if($num1>0){
      $showError="Username already exists";
    }
    else{
      if($password==$cpassword){
        $hash=password_hash($password, PASSWORD_DEFAULT);
        $sql="INSERT INTO `signup` (`username`, `password`, `dt`,`role`) VALUES ('$username', '$password', current_timestamp(6),0)";
        $result=mysqli_query($conn,$sql);
        if($result){
          $showAlert=true;
          header("location: login.php");
        }
      }
      else{
        $showError="Passwords do not match";
      }
    }
}
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>SignUp</title>
    <style>
        *{
            margin: 0px;
            padding: 0px;
        }
        body{
          background-color:#26230e8f;
        }
      
        .nav-link, .navbar-brand, .btn{
          color:white;
          font-weight: bolder;
        }

        .navbar{
          /* background-color: #26230e8f; */
          background-color:#dd5463;
        }
        .text-center{
            color:white;
        }
        .btn-primary{
            background-color:#dd5463;
            color:white;
            border:none;
        }
    </style>

  </head>
  <body>
  <?php
    include "_nav1.php";
    ?>
  <?php
  if($showAlert){
    echo `<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Successful!</strong> Your account has been created and you can now login.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>`;
  }
  if($showError){
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Error!</strong> '.$showError.'
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
  }
  ?>
    <div class="container mt-3">
        <h1 class="text-center">SignUp to our Website</h1>
        <form action="signUp.php" method="post">
            <div class="mb-3">
                <label for="username" class="form-label" id="username" name="username">UserName</label>
                <input type="text" maxlength="11" class="form-control" id="username" name="username" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" maxlength="23" class="form-control" id="password" name="password">
            </div>
            <div class="mb-3">
                <label for="cpassword" class="form-label">Confirm Password</label>
                <input type="password" class="form-control" id="cpassword" name="cpassword">
            </div>
            <button type="submit" class="btn btn-primary">SignUp</button>
        </form>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>