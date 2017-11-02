<?php
include_once 'dbconnect.php';
session_start();
//$username="admin";
//$password="12345";
$username=$_POST['username'];
$password=$_POST['password'];
$query=  mysqli_query($con, "select id from admin where username='$username' and pwd='$password'");
$id=  mysqli_num_rows($query);
//echo $no;
if($id == 1)
{//echo "no".$no;
//$fetch=  mysqli_fetch_array($query);
//$user_id=$fetch['user_id'];
//$module=$fetch['module'];
$_SESSION['admin_id']=$id;
//$_SESSION['module']=$module;
//if($module == '4'){
    header("location:dashboard.php?id=$id");
//
//}
}
else
{
        header("location:index.php?error=error");
    //echo "invalid username and password";
    
}

?>