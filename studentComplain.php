<?php session_start();?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>StudentHomePage</title>
    <style>
        .h1{
            text-align:center;
            margin-top: 1%;
            color:#fd0d79;
        }
        input, textarea{
            border-radius: 10px;
            width: 100%;
            padding: 10px;
            margin-bottom: 2%;
            border: 1px solid white;
            font-weight: bolder;
        }
        .btn1{
            /* background-color: #26230e8f; */
            color: #fd0d79;
            font-weight: bolder;
            margin-left: 34%;
            border-radius: 10px;
            margin-top: 5%;
            padding: 15px;
            border: 1px solid pink;
        }

        .container{
            /* border: 2px solid black; */
            width: 36%;
            /* padding: 9%; */
            margin-top: 2%;
            border-radius: 60px;
            /* background-color:#f60b61; */
            background-color: #26230e8f; 
            padding-top: 3%;
            padding-bottom: 2%;
        }
        .nav-link, .navbar-brand, .btn{
          color:white;
          font-weight: bolder;
        }
        .btn1:hover{
          background-color:  #fd0d79;
          color: pink;
        }
        .btn:hover{
            background-color: pink;
          color: #0d6efd;
        }
        body{
            /* background-color: #d4c4688f; */
        }
        .navbar{
          background-color: #fd0d79;
        }
    </style>
  </head>
  <body>
    <?php
    include '_nav1.php';
    ?>

    <h2 class="h1">Complain Box</h2>
    <div class="container">
    <form action="studentComplain.php" method="post">
    <!-- <input type="text" name="name" placeholder="Enter your name"><br> -->
        <input type="number" name="room" placeholder="Enter your room no."><br>
        <textarea class="form-control" name="complain" placeholder="What complain do you have?" id="floatingTextarea2" style="height: 100px; font-weight: bolder;"></textarea>
        <input type="text" name="phone" placeholder="Enter your contact number"><br>
        <button type="submit" class="btn1">Submit</button><br>
    </form>
    </div>

    <?php

$servername="localhost";
$username="root";
$password="";
$database="project";

if($_SERVER['REQUEST_METHOD']=="POST"){
  $name=$_SESSION['name'];
  $room=$_POST['room'];
  $phone=$_POST['phone'];
  $complain=$_POST['complain'];
  
  $conn=mysqli_connect($servername,$username,$password,$database);
  $sql="INSERT INTO `complains` (`Full Name`, `Room No.`, `Complain Details`, `Contact`,`solved`) VALUES ('$name', $room, '$complain', $phone,0)";
  $result=mysqli_query($conn,$sql);
  if($result){
    // echo "SUCCESS";
  }
  else{
    echo mysqli_error($conn);
  }
  
}
?>
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

