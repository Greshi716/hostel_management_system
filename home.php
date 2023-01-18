<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href=
"https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" />
 
    <!-- Bootstrap Font Icon CSS -->
    <link rel="stylesheet" href=
"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />
    <title>Tweshi Hostels</title>
    <style>
        *{
            margin: 0px;
            padding: 0px;
        }
        body{
          background-color:#26230e8f;
        }
        .t1{
            /* background-image: url(bed-142517_960_720.jpg); */
            background-image:url('bck1.JPG');
            padding-left: 40%;
            padding-top: 6%;
            padding-bottom: 25%;
            background-repeat: no-repeat;
            background-size: 100vw 100vh;
        }
        .t1 h1{
            /* border: 1px solid black; */
            /* color:white; */
            width: 45%;
            color:#dd5463;
            font-size:3.5rem;
        }
        h2{
            text-align: center;
            /* color: blue; */
            color:white;

        }
        
        .carousel-inner img{
            height: 90vh;
            /* margin:10px;
            padding:20px;
            width:30px; */
        }


        .footer{
          display:flex;
          /* text-align: center; */
          background-color: black;
          color: white;
          height:30px;
        }
        .footer .pdeu{
          float:right;
          margin-left: 75%;
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
          color: #dd5463;
        }
        .navbar{
          /* background-color: #26230e8f; */
          background-color:#dd5463;
        }
        .navbar ul{
          margin-left:60%;
        }
        #services{
    flex-direction: column;
    align-items:center;
    justify-content:center;
    text-align:center;
}

#services .box { 
  display:inline;
  flex-direction:column;
    padding: 14px;
    margin: 10px 0px; 
    margin-bottom: 20px;
    align-items:center;
    justify-content:center;
    text-align:center;
    /* border:3px solid black; */
}
#services .box img{ 
    height:300px;
    width:300px;
    border-radius:20px;
    border:5px solid #dd5463;
}
.icons h2{
  text-align: center;
  /* font-size: 30px; */
}
.icons .bi{
    margin-left: 12px;
}
.icons{
  font-size: 30px;
  color: white;
}
@media only screen and (max-width: 600px) {
  #services .box img{
    margin-top: 5px;
  }
  .t1 h1{
    font-size:40px;
  }
}

@media only screen and (min-width: 768px) {
  .t1{
    padding-bottom: 10%;
  }
}
    </style>
  </head>
  <body>
    <?php
    include '_nav1.php';
    ?>
      <div class="t1">
        <h1>Tweshi Hostels</h1>
      </div>
      <h2>Photo Gallery</h2>
      <!-- <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="img2.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="img3.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="img4.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="img5.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="img6.jpg" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span> 
        </button> 
      </div> -->
      <section id="services-container">
        <!-- <h1 class="h-primary center">Our Services</h1> -->
        <div id="services">
        <div class="box">
                <img src="img2.jpg" alt="">
                <!-- <h2 class="h-secondary center">Bulk Ordering</h2>
                <p class="center">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quidem, culpa suscipit error
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde laudantium a incidunt animi ad, ab dignissimos vero? Unde numquam odit repudiandae perferendis nisi.

                    sint delectus ab dolorum nam. Debitis facere, incidunt voluptates eos, mollitia voluptatem iste sunt
                    voluptas beatae facilis labore, omnis sint quae eum.</p> -->
            </div>
      <div class="box">
                <img src="img3.jpg" alt="">
                <!-- <h2 class="h-secondary center">Bulk Ordering</h2> -->
                <!-- <p class="center">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quidem, culpa suscipit error
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde laudantium a incidunt animi ad, ab dignissimos vero? Unde numquam odit repudiandae perferendis nisi.

                    sint delectus ab dolorum nam. Debitis facere, incidunt voluptates eos, mollitia voluptatem iste sunt
                    voluptas beatae facilis labore, omnis sint quae eum.</p> -->
        </div>
        <div class="box">
                <img src="img4.jpg" alt="">
                <!-- <h2 class="h-secondary center">Bulk Ordering</h2>
                <p class="center">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quidem, culpa suscipit error
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde laudantium a incidunt animi ad, ab dignissimos vero? Unde numquam odit repudiandae perferendis nisi.

                    sint delectus ab dolorum nam. Debitis facere, incidunt voluptates eos, mollitia voluptatem iste sunt
                    voluptas beatae facilis labore, omnis sint quae eum.</p> -->
            </div>
            <div class="box">
                <img src="img5.jpg" alt="">
                <!-- <h2 class="h-secondary center">Bulk Ordering</h2>
                <p class="center">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quidem, culpa suscipit error
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde laudantium a incidunt animi ad, ab dignissimos vero? Unde numquam odit repudiandae perferendis nisi.

                    sint delectus ab dolorum nam. Debitis facere, incidunt voluptates eos, mollitia voluptatem iste sunt
                    voluptas beatae facilis labore, omnis sint quae eum.</p> -->
            </div>
</div>
<br>
</section>
      <!-- <div class="sf">
        <div class="service1">

        </div>
        <div class="service2"></div>
      </div> -->
      <!-- <section id="client-section">
        <h1 class="h-primary center">Facilities Provided</h1> -->
        <!-- <div id="clients">
            <div class="client-item">
                <i class="fa fa-book" aria-hidden="true"></i>
            </div>
            <div class="client-item">
                <img src="img/logo2.png" alt="Our Client">
            </div>
          
            <div class="client-item">
                <img src="img/logo4.png" alt="Our Client">
            </div>
            <div class="client-item">
                <img src="img/logo3.png" alt="Our Client">
            </div>
        </div> -->

                <!-- <i class="fa fa-book" aria-hidden="true"></i>
    </section>  -->
    <div class="icons">
      <h2>Services</h2>
      <i class="bi bi-book-fill"></i> Library <br>
      <i class="bi bi-wifi"></i> Wifi <br>
      <i class="bi bi-bucket-fill"></i> 24 hrs Water Supply <br>
      <i class="bi bi-shop"></i> Mess
    </div>
      <div class="footer">
        <p>Copyright-All rights reserved 2022</p>
        <p class="pdeu">PDEU</p>
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