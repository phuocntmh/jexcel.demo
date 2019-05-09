<?php
	$db_host 	= "localhost";
	$db_name	= 'achau';
	$db_username= 'root';
	$db_password= '';
	@mysql_connect("{$db_host}", "{$db_username}", "{$db_password}") or die("Không thể kết nối CSDL!");
	@mysql_select_db("{$db_name}") or die("Không thể kết nối CSDL!");
?>