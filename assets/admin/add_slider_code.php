<?php
include_once('dbconnect.php');
//$id=$_POST['faculty_id'];
$name=$_POST['title'];
$photo=$_FILES['slider']['tmp_name'];
$photo1=$_FILES['slider']['name'];
$file_loc="sliderimg/";

//$tmpName = $_FILES['userfile']['tmp_name']; 
         
list($width, $height, $type, $attr) = getimagesize($photo1); 

if($width>1349 || $height>350) 
{ 
echo "exceeded image dimension limits."; 
} 

//echo $name.$photo1.$photo;


else if(move_uploaded_file($photo,$file_loc.$photo1))
{
    $query=  mysqli_query($con, "INSERT INTO `home_slider`(`image`, `description`) VALUES ('$photo1','$name')");
//echo "inserted";
header("location:home_slider.php");
    exit;
}
else
{
    echo "error: file not able to move to folder";
}

?>