
<?php
	//liên kết đến file config.php
	include('connect.php');
	//Tạo đối tượng kết nối
	$mysqli = new dbConnection();
	//Lấy dữ liệu
							
    	
	$query = $mysqli->query("SELECT * FROM `classes`");			
	
	
	/*while($row=$result->fetch_assoc())
	{
        $data .= "<b>".$row['Email']."</b><i> (". $row['ngaydang'].")</i><br />";
        $data .= $row['noidung']."<br /><hr />";
    }	
	echo $data;	
	*/
	
	// Biến result
	$result = array();	
	$numrows =  $query->num_rows;
	if ($numrows > 0)
	{
		//while ($row = mysqli_fetch_array($result, MYSQL_ASSOC)){
		while($row=$query->fetch_assoc()){
			$result[] = array($row['name'],$row['lv_name'],$row['hide'],$row['Stock'],$row['Next purchase']);
		}
	}	
	die (json_encode($result));
?>



