<?php
include_once('dbconnect.php');
//$id=$_POST['faculty_id'];

$title=$_POST['title'];
$image=$_FILES['image']['tmp_name'];
$image1=$_FILES['image']['name'];

$file_loc="resourcesimg/";
$content=$_POST['content'];
//echo $title.",".$image1.",".$content;
    if(move_uploaded_file($image,$file_loc.$image1))
{



    $query=  mysqli_query($con, "INSERT INTO `resources`(`title`, `image`, `description`) VALUES ('$title','$image1','$content')");
//echo "inserted";
header("location:resources.php");
}
else
{
    echo "error: file not able to move to folder";
}


?>