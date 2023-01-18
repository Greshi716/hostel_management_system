
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
 $query = "
  SELECT * FROM complains
  WHERE `Full Name` LIKE '%".$search."%'
  OR `Room No.` LIKE '%".$search."%' 
  OR `Complain Details` LIKE '%".$search."%' 
  OR `Contact` LIKE '%".$search."%' 
 ";
}
else
{
 $query = "
  SELECT * FROM complains ORDER BY `Room No.`
 ";
}
$result = mysqli_query($conn, $query);
if(mysqli_num_rows($result) > 0)
{
 $output .= '
  <div class="table-responsive">
   <table class="table table bordered">
    <tr>
     <th>Full Name</th>
     <th>Room No.</th>
     <th>Complain Details</th>
     <th>Contact</th>
    </tr>
 ';

 while($row = mysqli_fetch_array($result))
 {
  $output .= '
   <tr>
    <td>'.$row["Full Name"].'</td>
    <td>'.$row["Room No."].'</td>
    <td>'.$row["Complain Details"].'</td>
    <td>'.$row["Contact"].'</td>
    <td>
    <form action="solved_complain.php" method="get">
     <input type="submit" name="name" class="edit btn btn-success button1" value='.$row['Full Name'].'>
    </form>
    </td>
    
   </tr>

  ';

  }
//   if(isset($_GET ['Accept'])){
//     // $conn=mysqli_connect($servername,$username,$password,$database);
// $sql="INSERT INTO `leaves` (`Full Name`, `Room No.`, `Reason for leave`, `Contact Number`,`Issue Status`) VALUES ('dddddd1111', 27398, 'dsashdja', 89323,'1')";
// $result=mysqli_query($conn,$sql);
//   }

 echo $output;
}
else
{
 echo 'Data Not Found';
}

?>