<?php
include_once('dbconnect.php');


$id=$_POST['slider_id'];
$name=$_POST['name'];
$Ephoto=$_POST['Ephoto'];
$Uphoto=$_FILES['files2']['tmp_name'];
$Uphoto1=$_FILES['files2']['name'];

echo "value:".$name;
$file_loc="sliderimg/";
if($Uphoto1=="")

{
    $q=  mysqli_query($con, "UPDATE `home_slider` SET `image`='$Ephoto',`description`='$name' WHERE slider_id = '$id'");

header("location:home_slider.php");
}
else
{
    if(move_uploaded_file($Uphoto,$file_loc.$Uphoto1))
{
     $q=  mysqli_query($con, "UPDATE `home_slider` SET `image`='$Uphoto1',`description`='$name' WHERE slider_id = '$id'");

header("location:home_slider.php");
    
}
}
//$name=trim($_POST['faculty_photo']);

//print("DELETE FROM `merit_list` WHERE merit_list_id='$id'");exit;

?>