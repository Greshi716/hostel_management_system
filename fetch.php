
<?php
//fetch.php
// echo "inphp";
$server="localhost";
$username="root";
$password="";
$database="project";

$conn=mysqli_connect($server,$username,$password,$database);
if(!$conn){
    die("Error --> ".mysqli_connect_error());
}
// $connect = mysqli_connect("localhost", "root", "", "project");
$output = '';
if(isset($_POST["query"]))
{
 
 $search = mysqli_real_escape_string($conn, $_POST["query"]);
//  $query = "
//   SELECT * FROM leaves
//   WHERE `Full Name` LIKE '%".$search."%'
  
//   OR `Room No.` LIKE '%".$search."%' 
//   OR `Reason for leave` LIKE '%".$search."%' 
//   OR `Contact Number` LIKE '%".$search."%' 
//  ";
}
// else
// {
 $query = "
  SELECT * FROM leaves ORDER BY `Room No.`
 ";
 $result = mysqli_query($conn, $query);
// }
// if(mysqli_num_rows($result) > 0)
// {
  
 $output .= '
  <div class="table-responsive">
   <table class="table table bordered">
    <tr>
     <th>Full Name</th>
     <th>Room No.</th>
     <th>Reason for leave</th>
     <th>Contact Number</th>
    </tr>
 ';

 while($row = mysqli_fetch_array($result))
 {
  
  $output .= '
   <tr>
    <td>'.$row["Full Name"].'</td>
    <td>'.$row["Room No."].'</td>
    <td>'.$row["Reason for leave"].'</td>
    <td>'.$row["Contact Number"].'</td>
    <td>
    <form action="update.php" method="get">
     <input type="submit" name="name" class="edit btn btn-success button1" value="accept">
    </form>
    <form action="update1.php">
    <input type="submit" name="name" class="delete btn btn-danger" value="reject">
    </form>
    <td>
   </tr>

  ';
  
   
   
  }

 echo $output;
// }
// else
// {
//  echo 'Data Not Found';
// }

?>