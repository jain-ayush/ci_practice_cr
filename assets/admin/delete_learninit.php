<?php
include_once('dbconnect.php');
$id=$_GET['id'];
//echo $id;
//print("DELETE FROM `merit_list` WHERE merit_list_id='$id'");exit;
$q=  mysqli_query($con, "DELETE FROM `learninit_content` WHERE 	learninit_content_id='$id'");

header("location:learninit.php?delete=delete");
?>