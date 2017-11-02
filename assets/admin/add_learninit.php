<?php
include_once('dbconnect.php');
//$id=$_POST['faculty_id'];

$type=$_POST['type'];
$title=$_POST['title'];
$content=$_POST['content'];



    $query=  mysqli_query($con, "INSERT INTO `learninit_content`(`learninit_type_id`, `title`, `content`) VALUES ('$type','$title','$content')");
//echo "inserted";
header("location:learninit.php");


?>