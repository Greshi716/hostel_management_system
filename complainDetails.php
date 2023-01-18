<html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>COMPLAIN DETAILS</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
  <style>
       .nav-item,.nav-link, .navbar-brand, .btn{
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
        .container h1{
            text-align:center;
            justify-content:center;
            align-items:center;
            color:#fd0d79;
        }
</style>
 </head>
 <body>


  <div class="container">
   <br />
   <h1>COMPLAIN DETAILS</h1><br />
   <div class="form-group">
    <div class="input-group">
     <span class="input-group-addon">Search</span>
     <input type="text" name="search_text" id="search_text" placeholder="Search...." class="form-control" />
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
   url:"fetch1.php",
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
