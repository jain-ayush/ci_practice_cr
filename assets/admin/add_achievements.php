<?php
include_once('dbconnect.php');
//$id=$_POST['faculty_id'];

$achievements_year_id=$_POST['achievements_year_id'];
$achivecount=$_POST['count'];
$title=$_POST['title'];
//$year=$_POST['year'];

echo $title.$achivecount.$achievements_year_id;
// $query11=  mysqli_query($con, "SELECT count(event) as countevent FROM `achievements` WHERE `event` ='' and month='$month'");
//
//while($result=  mysqli_fetch_array($query11))
// { $count=$result['countevent'];
//       //echo "count".$count;                                                     
//if($count==1)
//{
//    $query=  mysqli_query($con, "UPDATE `achievements` SET `event`='$title',`count`='$achivecount',`month`='$month',`year`='$year' WHERE `event`='' and month='$month'");
//    //echo "updated";
//}
//  else
//  {
    $query=  mysqli_query($con, "INSERT INTO `achievements`(`event`, `count`, `year`) values ('$title','$achivecount','$achievements_year_id')");
////echo "inserted";
//  }
// }
//  
// 
header("location:achievements.php");
//if($query)
//{echo 'inserted';}
//else
//{
//    echo 'not inserted';
//}
?>