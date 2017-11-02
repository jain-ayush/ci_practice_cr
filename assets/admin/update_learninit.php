<?php
include_once('dbconnect.php');

$id=$_POST['learninit_content_id'];
//$type_id=$_POST['type_id'];
$title=$_POST['title'];
$content=$_POST['content'];

echo $id.",".$title.",".$content;
  $q=  mysqli_query($con, "UPDATE `learninit_content` SET `title`='$title',`content`='$content' WHERE  learninit_content_id= '$id'");

//if($q)
//{
//    echo "inserted";
//    
//}
//else
//    
//{
//    echo " not inserted";
//    
//}

header("location:learninit.php");
    
//$name=trim($_POST['faculty_photo']);

//print("DELETE FROM `merit_list` WHERE merit_list_id='$id'");exit;

?>