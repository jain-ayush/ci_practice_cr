<?php
include_once('dbconnect.php'); 

$id=$_GET['id'];
$select_status=mysqli_query($con,"select * from achievements_year where achievements_year_id='$id'");
while($row=mysqli_fetch_array($select_status))
{
$st=$row['status'];
if($st=='0')
{
$status2=1;
}
else
{
$status2=0;
}

$update=mysqli_query($con,"update achievements_year set status='$status2' where achievements_year_id='$id' ");
if($update)
{
    echo "updated";
header("Location:achievements.php");
}
else
{
echo 'error';
}
}

?>