<?php
$showAlert = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include '_db.php';
    $username = $_POST["username"];
    $password = $_POST["password"];
    // $cpassword = $_POST["cpassword"];
    $exists=false;
    // if(($password == $cpassword) && $exists==false){
        $sql="SELECT username,role from `signup` WHERE username='$username' AND password='$password'";
        $result = mysqli_query($conn, $sql);
        // echo $result[0];
        
        if ($result){
            session_start();
            $_SESSION['name'] = $username;
            // echo $username;
            $showAlert = true;
            $storeArray=Array();
            while($row=mysqli_fetch_array($result)){
                $storeArray[0]=$row['role'];
                if($storeArray[0]==0){
                    header("location: student.php");
                } 
                else{
                    header("location: warden.php");
                }
            }
            
        }
    // }
        else{
            $showError = "Connection Error";
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

    <title>Login</title>
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
    require "_nav1.php";
    ?>
  <?php
if($showAlert){
    echo '
    
    <div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Success!</strong> Your account is now created and you can login
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
    
    ';}
    if($showError){
    echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong> '. $showError.'
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        </button>
    </div> ';
    }
  ?>
    <div class="container mt-3">
        <h1 class="text-center">Login to our Website</h1>
        <form action="login.php" method="post">
            <div class="mb-3">
                <label for="username" class="form-label" id="username" name="username">UserName</label>
                <input type="text" class="form-control" id="username" name="username" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
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