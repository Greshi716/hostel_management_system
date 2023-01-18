<?php
session_start();?>
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
        /* .btn1{
          background-color: pink;
          color: #043bbc;
            font-weight: bolder;
            margin-left: 34%;
            border-radius: 20px;
            margin-top: 5%;
            padding: 15px;
        }

        .btn1:hover{
            background-color: #043bbc;
            color: pink;
        }

        #b2{
            margin-left: 27%;
            margin-bottom: 5%;
        } 

        .container{
            border: 2px solid black;
            width: 36%;
            /* padding: 9%; */
            /* margin-top: 8%;
            border-radius: 195px;
            background-color:#dd5463;
            padding-top: 5%;
            padding-bottom: 5%;
        }
        .nav-link, .navbar-brand, .btn{
          color:white;
          font-weight: bolder;
        }

        .btn{
          border: 1px solid white;
        }

        .btn:hover{
          background-color: pink;
          color: blue;
        } */
        .nav-link, .navbar-brand, .btn{
          color:white;
          font-weight: bolder;
        }
        body{
          /* background-color: #0000ff17; */
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
          color: blue;
        }
        .navbar{
          background-color:#dd5463;

                }
        .c1{
          /* margin-left: 12px; */
          display: flex;
        }
        .vertical1{
          width: 80%;
          display: flex;
          flex-direction:column;
        }
        .vertical1 h1{
          text-align: center;
        margin-top: 12%;
        }
        .vertical1 .h2 img{
          /* height:100vh; */
          height:450px;
          width: 1229px;
          float:right;
          margin-left:400px;
        }
        .h1 h1{
          color:#dd5463;
        }
         
    </style>
  </head>
  <body>
    <?php include '_nav1.php';?>
    <div class="c1">
    
      <div class="vertical1">
        <div class="h1"><h1><?php echo 'Welcome '; echo $_SESSION['name']?></h1>
        
        <?php
        include '_db.php';
        // echo"name:";
        // echo $_SESSION['name'];
        $name1=$_SESSION['name'];
        $sql="SELECT `Full Name`,`Issue Status` FROM leaves WHERE `Issue Status`=1 AND `Full Name`='$name1'";
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result) > 0)
        {
          echo "You're Leave has been Accepted!";
        }
        $sql="SELECT `Full Name`,`solved` FROM complains WHERE `solved`=1 AND `Full Name`='$name1'";
          $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result) > 0)
        {
          echo "......................You're Complaint has been Solved!......................";
        }
    ?>
      </div>
      
        <div class="h2"><img src="studentbck.png" alt="" srcset=""></div>

      </div>
      <div class="vertical">
        <a href="studentLeave.php"><button class="b" id="btn1">ASK LEAVE</button></a><br>
        <a href="studentComplain.php"><button class="b" id="btn2">ANY COMPLAINT?</button></a>
      </div>
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