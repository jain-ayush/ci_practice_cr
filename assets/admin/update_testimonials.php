<?php
include_once('dbconnect.php');

$id=$_POST['testimonials_id'];
$content=$_POST['content'];
$name=$_POST['name'];
$designation=$_POST['designation'];
$company=$_POST['company'];
echo $id.",".$content.",".$name.",".$designation.",".$company;
  $q=  mysqli_query($con, "UPDATE `testimonials` SET `content`='$content',`name`='$name',`designation`='$designation',`company`='$company' WHERE testimonials_id= '$id'");



header("location:testimonials.php");
    
//$name=trim($_POST['faculty_photo']);

//print("DELETE FROM `merit_list` WHERE merit_list_id='$id'");exit;

?>