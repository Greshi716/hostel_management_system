<?php
    session_start(); 
    
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>WardenHomePage</title>
    <style>
        
        .nav-items,.nav-link, .navbar-brand, .btn{
          color:white;
          font-weight: bolder;
        }
        body{
          background-color: white;
          overflow-x: hidden;
          overflow-y: hidden;
        }

        .vertical{
          border: 1px solid black;
          height: 710px;
          width: 20%;
          background-color:#26230e8f;
        }

        #btn1{
          background-color:#dd5463;
          border:none;
          color:white;
          margin-top: 80%;
            margin-left: 10%;
        }
        #btn2{
          background-color:#dd5463;
          border:none;
          color:white;
          margin-top: 10%;
            margin-left: 10%;
        }
        .b{
          padding: 20px;
          border-radius: 10px;
          border: 1px solid white;
        }

        .b:hover{
          background-color: pink;
          color: gray;
        }
        .navbar{
          background-color:#dd5463;
        }
        .sec{
          display:flex;
          flex-direction:row;

        }
        .vertical1{
          width: 70%;
          display: flex;
          /* flex-direction:column; */
        }
        .vertical1 h1{
          width:35%;
          text-align: center;
          margin-top: 12%;
        }
        .vertical1 .h2{
          width:25%;
        }
        .vertical1 .h2 img{
          /* height:100vh; */
          height:710px;
          width:480px;
           margin-top:50px;
          margin-right:50px; 
          /* width: 1215px; */
          /* float:left; */
          /* margin-left:400px; */
        }
    </style>
  </head>
  <body>
    <?php
    include '_nav1.php';
    ?>
    <div class="sec">
      <div class="vertical">
          <a href="leaves.php"><button id="btn1" class="b">LEAVE APPLICATIONS</button></a><br>
          <a href="complainDetails.php"><button id="btn2" class="b">COMPLAINTS</button></a>        
      </div>
      <div class="vertical1">
          <div class="h1"><h1><?php echo 'Welcome '; echo $_SESSION['name']?></h1></div>
          <div class="h2"><img src="wardenbck.jpg" alt="" srcset=""></div>
        </div>
    </div>
    <!-- <div class="container">
        <a href="leaveDetails.php"><button class="btn1" id="b1">LEAVE APPLICATIONS</button></a><br>
        <a href="complainDetails.php"><button class="btn1" id="b2">COMPLAINTS</button></a>
    </div> -->
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