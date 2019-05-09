<?php
    $db_host    = "localhost";
    $db_name    = 'achau';
    $db_username= 'root';
    $db_password= '';
    @mysql_connect("{$db_host}", "{$db_username}", "{$db_password}") or die("Không thể kết nối CSDL!");
    @mysql_select_db("{$db_name}") or die("Không thể kết nối CSDL!");

	$conn = new mysqli($db_host, $db_username, $db_password, $db_name);
    if ($conn->connect_error) 
    { 
        die("Không thể kết nối CSDL. Code: " . $conn->connect_error); 
    }

    $result = $conn->query("SELECT * FROM classes");
    //var_dump($result);
	$res = array();

	if ($result->num_rows > 0) 
    {
        while($row = $result->fetch_assoc()) 
        {

        	$res[] = array(
                'name' => $row['name'],
                'id' => $row['id']
            );
        }
   	}
    //var_dump($res);
    //echo $res;
	die (json_encode($res));
?>