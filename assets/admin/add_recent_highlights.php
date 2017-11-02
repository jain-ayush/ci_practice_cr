<?php
include_once('dbconnect.php');
//$id=$_POST['faculty_id'];

$month=$_POST['month'];
$highlight=$_POST['highlight'];
//   $month=2; 
//$query11=  mysqli_query($con, "select name from month where month_id='$month'");
//while($result=  mysqli_fetch_array($query11))
//{
    $monthname=$result['name'];
    $query=  mysqli_query($con, "INSERT INTO `recent_highlights`(`month`, `highlights`) VALUES ('$month','$highlight')");
//}                                  
//echo $monthname;
   // $query=  mysqli_query($con, "INSERT INTO `recent_highlights`(`month`, `highlights`) VALUES ('$month','$highlight')");
//echo "inserted";
header("location:recent_highlights.php");


?>