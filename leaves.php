<html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>LEAVE DETAILS</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
  <!-- <style>
       /* .nav-item,.nav-link, .navbar-brand, .btn{
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
        
            #navbar {
    display: flex;
    /* margin-top: -16px; */
    margin-left: -48px;
    background-color: brown;
    border: 1px solid black;
    position: fixed;
    width: 110%;
}

ul{
    display: flex;
}

#navbar ul li{
    list-style: none;
}

.item a{
    text-decoration: none;
    color: white;
}
#btn a{
    text-decoration: none;
    color: white;
}
.item{
    /* border: 1px solid black; */
    /* margin-right: 35px; */
    padding: 16px;
    margin-bottom: -20px;
    /* margin-top: -12px; */
    text-align: center;
}
#other:hover{
    background-color: white;
}

#other a:hover{
    background-color: white;
    color: black;
}

#btn:hover , a:hover{
    background-color: grey;
    color: black;
}
#home a{
    color: black;
}
#home{
    background-color: white;
}




</style> -->
<style>
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
        .navbar ul li{
          margin-top :10px;

          list-style:none;
          text-decoration:none;
        }
        .nav-item a{
          padding:16px;
          margin-bottom:-20px;
          text-align :center;
        }

  </style>

 </head>
 <body>
 <!-- <nav id="navbar">
        <ul>
            <li class="item" id="home"><a href="#">Home</a></li>
            <li class="item" id="other"><a href="#">Link1</a></li>
            <li class="item" id="other"><a href="#">Link2</a></li>
            <li class="item" id="other"><a href="#">Link3</a></li>
            <li class="item" id="other"><a href="#">Link4</a></li>
        </ul>
    </nav> -->
    <nav class="navbar navbar-expand-lg navbar- bg">
        <div class="container-fluid">
            <!-- <img src="bed-142517_960_720.jpg" alt=""> -->
            <a class="navbar-brand" href="home.php">Tweshi</a>
            <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span> -->
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="home.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Book Now</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Contact Us</a>
              </li>
              <!-- <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Dropdown
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li> -->
              <!-- <li class="nav-item">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
              </li> -->
              <li class="nav-item">
                <a class="nav-link" href="login.php">Login</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="signUp.php">Signup</a>
              </li>
            </ul>
            
            <!-- <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Signup</button>
            </form> -->
          </div>
        </div>
      </nav>
  
<br>
  <div class="container">
   <br />
   <h1>LEAVE DETAILS</h1><br />
   <div class="form-group">
    <div class="input-group">
     <span class="input-group-addon">Search</span>
     <input type="text" name="search_text" id="search_text" placeholder="Search by Customer Details" class="form-control" />
    </div>
   </div>
   <br />
   <div id="result"></div>
  </div>
 </body>
</html>


<script>
$(document).ready(function(){

 load_data();

 function load_data(query)
 {
  $.ajax({
   url:"fetch.php",
   method:"POST",
   data:{query:query},
   success:function(data)
   {
    $('#result').html(data);
   }
  });
 }
 $('#search_text').keyup(function(){
  var search = $(this).val();
  if(search != '')
  {
   load_data(search);
  }
  else
  {
   load_data();
  }
 });
});
</script>
