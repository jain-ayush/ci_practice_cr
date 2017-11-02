<?php
include_once('dbconnect.php');

$id=$_POST['resources_id'];
$title=$_POST['title'];
$photo=$_POST['photo'];
$Uimage=$_FILES['Uimage']['tmp_name'];
$Uimage1=$_FILES['Uimage']['name'];
$content=$_POST['content'];
$file_loc="resourcesimg/";


echo $id.",".$title.",".$photo.",".$Uimage1.",".$content;
if($Uimage1=="")
{
$q=  mysqli_query($con, "UPDATE `resources` SET `title`='$title',`image`='$photo',`description`='$content' WHERE resources_id = '$id'");



header("location:resources.php");
}
else if(move_uploaded_file($Uimage,$file_loc.$Uimage1))
{
    $q=  mysqli_query($con, "UPDATE `resources` SET `title`='$title',`image`='$Uimage1',`description`='$content' WHERE resources_id = '$id'");



header("location:resources.php");
}
else
{
echo "insert";
}

//$name=trim($_POST['faculty_photo']);

//print("DELETE FROM `merit_list` WHERE merit_list_id='$id'");exit;

?>