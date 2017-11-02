<?php
include_once('dbconnect.php');
$id=$_GET['id'];
//echo $id;
//print("DELETE FROM `merit_list` WHERE merit_list_id='$id'");exit;
$q=  mysqli_query($con, "DELETE FROM `home_slider` WHERE slider_id='$id'");

header("location:home_slider.php?delete=delete");
?>