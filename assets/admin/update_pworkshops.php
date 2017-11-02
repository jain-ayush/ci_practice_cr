<?php
include_once('dbconnect.php');

$id=$_POST['workshops_id'];
$wname=$_POST['wname'];
$loc=$_POST['loc'];
$startdata=$_POST['startdata'];
$enddate=$_POST['enddate'];
$month=$_POST['month'];

//echo $id.",".$wname.",".$loc.",".$startdata.",".$enddate.",".$month;
  $q=  mysqli_query($con, "UPDATE `workshops` SET `name`='$wname',`location`='$loc',`month`='$month',`start_date`='$startdata',`end_date`='$enddate' WHERE workshops_id= '$id'");



header("location:pworkshops.php");
    
//$name=trim($_POST['faculty_photo']);

//print("DELETE FROM `merit_list` WHERE merit_list_id='$id'");exit;

?>