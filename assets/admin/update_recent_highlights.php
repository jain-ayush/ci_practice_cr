<?php
include_once('dbconnect.php');

$id=$_POST['recent_highlights_id'];
$month=$_POST['month'];
$highlights=$_POST['highlights'];

echo $id.",".$month.",".$highlights;
$query11=  mysqli_query($con, "select month_id from month where name='$month'");
while($result=  mysqli_fetch_array($query11))
{ echo $result['month_id'];
    $monthname=$result['month_id'];
  $q=  mysqli_query($con, "UPDATE `recent_highlights` SET `month`='$monthname',`highlights`='$highlights' WHERE recent_highlights_id= '$id'");
header("location:recent_highlights.php");
}



//
    
//$name=trim($_POST['faculty_photo']);

//print("DELETE FROM `merit_list` WHERE merit_list_id='$id'");exit;

?>