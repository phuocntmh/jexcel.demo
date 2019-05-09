<?php
	/*$data = $HTTP_RAW_POST_DATA;
	$jsondata = file_get_contents($HTTP_RAW_POST_DATA);
$obj = json_decode($jsondata,true);
echo "<pre>";
print_r($obj);*/
var_dump( file_get_contents('php://input'));
var_dump($HTTP_RAW_POST_DATA);
?>