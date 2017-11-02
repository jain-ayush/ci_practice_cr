<?php
//JSON Response Function
function deliver_response($status,$status_message,$root_element,$data)
{
	require_once("jsonFormat.php");
	$jobj=new json_format();
	header("HTTP/1.1 $status $status_message");
	$response=array("status"=>$status,"statusMessage"=>$status_message,$root_element=>$data);
	$json_response=json_encode($response);
	echo $json_response;
	echo "\n";
	return  true;
}
?>