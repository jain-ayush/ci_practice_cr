<?php
include_once('dbconnect.php');
//$id=$_POST['faculty_id'];

$photo=$_FILES['photo']['tmp_name'];
$photo1=$_FILES['photo']['name'];

echo $name.$photo1.$photo;
$file_loc="gallery/";

if(move_uploaded_file($photo,$file_loc.$photo1))
{
    $query=  mysqli_query($con, "INSERT INTO `gallery`(`photo`) VALUES ('$photo1')");
//echo "inserted";
header("location:gallery.php");
    exit;
}
else
{
    echo "error: file not able to move to folder";
}

?>