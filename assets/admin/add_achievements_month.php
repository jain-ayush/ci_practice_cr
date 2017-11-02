<?php
include_once('dbconnect.php');
//$id=$_POST['faculty_id'];


$month=$_POST['month'];
$year=$_POST['year'];
$query11=  mysqli_query($con, "SELECT name FROM `month` WHERE `month_id`='$month'");

while($result=  mysqli_fetch_array($query11))
 {
     $name=$result['name'];


//echo "month".$name.$year;


    $query=  mysqli_query($con, "INSERT INTO `achievements_year`(`month`,`year`) VALUES ('$name','$year')");
//echo "inserted";
header("location:achievements.php");
 }

?>