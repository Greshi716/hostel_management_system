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
    <title>StudentLeavePage</title>
    <style>
        .h1{
            text-align:center;
            margin-top: 2%;
            color:#fd0d79;
        }
        input{
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
            margin-top: 3%;
            border-radius: 60px;
            /* background-color:#f60b61; */
            background-color: #26230e8f; 
            padding-top: 5%;
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

$servername="localhost";
$username="root";
$password="";
$database="project";
$showAlert = false;

if($_SERVER['REQUEST_METHOD']=="POST"){
  $name=$_SESSION['name'];
  $room=$_POST['room'];
  $phone=$_POST['phone'];
  $reason=$_POST['reason'];
  $conn=mysqli_connect($servername,$username,$password,$database);
$sql="INSERT INTO `leaves` (`Full Name`, `Room No.`, `Reason for leave`, `Contact Number`,`Issue Status`) VALUES ('$name', $room, '$reason', $phone,'0')";
$result=mysqli_query($conn,$sql);
if($result){
  // echo 'SUCCESS';
  header("location: student.php");
  $showAlert = true;
}
else{
  echo mysqli_error($conn);
}
}
if($showAlert){
  echo '
  
  <div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Success!</strong> Leave Application successfully sent!
<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
  
  ';}
?>
<?php
    include '_nav1.php';
    $name1=$_SESSION['name'];
    ?>

    <h2 class="h1">Leave Application</h2>
    <div class="container">
    <form action="studentLeave.php" method="post">
        <!-- <input type="text" name="name" placeholder="Enter your name" value="greshi"><br> -->
        <input type="number" name="room" placeholder="Enter your room no."><br>
        <input type="text" name="reason" placeholder="Enter your reason"><br>
        <input type="text" name="phone" placeholder="Enter your contact number"><br>
        <button type="submit" class="btn1">Ask Leave</button><br>
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