<?php
include_once('dbconnect.php');
$id=$_GET['id'];
//echo $id;
//print("DELETE FROM `merit_list` WHERE merit_list_id='$id'");exit;
$q=  mysqli_query($con, "DELETE FROM `recent_highlights` WHERE recent_highlights_id='$id'");

header("location:recent_highlights.php?");
?>