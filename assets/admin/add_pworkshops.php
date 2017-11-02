<?php
include_once('dbconnect.php');
//$id=$_POST['faculty_id'];

$wname=$_POST['wname'];
$loc=$_POST['loc'];
$month=$_POST['month'];
$startdate=$_POST['startdate'];
$sdate=date("d",strtotime($startdate));
$enddate=$_POST['enddate'];
$edate=date("d",strtotime($enddate));
echo $startdate.$sdate.$edate;


    $query=  mysqli_query($con, "INSERT INTO `workshops`(`name`, `location`, `month`, `start_date`, `end_date`) VALUES ('$wname','$loc','$month','$sdate','$edate')");
//echo "inserted";
header("location:pworkshops.php");


?>