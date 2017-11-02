<?php
include_once('dbconnect.php');
//$id=$_POST['faculty_id'];

$content=$_POST['content'];
$name=$_POST['name'];
$designation=$_POST['designation'];
$company=$_POST['company'];



    $query=  mysqli_query($con, "INSERT INTO `testimonials`(`content`, `name`, `designation`, `company`) VALUES ('$content','$name','$designation','$company')");
//echo "inserted";
header("location:testimonials.php");


?>