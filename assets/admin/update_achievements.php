<?php
include_once('dbconnect.php');

$id=$_POST['achievements_id'];
$title=$_POST['title'];
$count=$_POST['count'];
$month=$_POST['m_id'];
$year=$_POST['year'];

//echo $id.",".$title.",".$count.",".$month.",".$year;
  $q=  mysqli_query($con, "UPDATE `achievements` SET `event`='$title',`count`='$count',`month`='$month',`year`='$year' WHERE achievements_id= '$id' and month='$month'");

if($q)
{
//    echo "inserted";
    header("location:achievements.php");
}
else
{
    echo "not inserted";
}

//
    
//$name=trim($_POST['faculty_photo']);

//print("DELETE FROM `merit_list` WHERE merit_list_id='$id'");exit;

?>