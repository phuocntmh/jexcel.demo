<?php
//liên kết đến file config.php
include('connect.php');
//Tạo đối tượng kết nối
$mysqli = new dbConnection();

if($_POST)
{
	$email = $_POST['email'];
	$noidung = $_POST['noidung'];
	
	$baiviet = $_POST['id'];
	//$ngaydang = date("d/m/y g:i");	
	$ngaydang = date("d/m/y");	
	//$date = date();
    $str = "INSERT INTO `bình_luận` SET email='".$email."',
                    noidung='".$noidung."',ngaydang='".$ngaydang."',baiviet=".$baiviet;
	
	$mysqli->query($str);	
	
	/*$result = "<b>".$email."</b><i> (". $ngaydang.")</i><br />";
    $result .= $noidung."<br /><hr />";
	echo $result;
	*/
	
}
?>