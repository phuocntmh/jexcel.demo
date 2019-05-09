
<?php
	//liên kết đến file config.php
	include('connect.php');
	//Tạo đối tượng kết nối
	$mysqli = new dbConnection();
	//Lấy dữ liệu
							
    $baiviet = $_GET['id'];	
	$page=$_GET['page'];	
	$from  = ($page*5)-5;	
	$query = $mysqli->query("SELECT * FROM `bình_luận` where baiviet=".$baiviet." order by `stt` desc limit ".$from.",5");			
	$data= '';
	
	/*while($row=$result->fetch_assoc())
	{
        $data .= "<b>".$row['Email']."</b><i> (". $row['ngaydang'].")</i><br />";
        $data .= $row['noidung']."<br /><hr />";
    }	
	echo $data;	
	*/
	
	// Biến result
	$result = array();	
	//$numrows =  $result->num_rows;
	//if (numrows > 0)
	//{
		//while ($row = mysqli_fetch_array($result, MYSQL_ASSOC)){
		while($row=$query->fetch_assoc()){
			$result[] = array(
				'Email' => $row['Email'],
				'ngaydang' => $row['ngaydang']
			);
		}
	//}	
	die (json_encode($result));
?>



