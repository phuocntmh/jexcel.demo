<?php
define('host','localhost');
define('user','root');
define('pass','');
define('db','achau');

class dbConnection
{
	private $link;
	//Kết nối
	public function __construct()
	{
		$this->link = new mysqli(host,user,pass,db);
		mysqli_set_charset($this->link,'utf8');		
	}
	/*
	//Hủy kết nối
	public function __destruct()
	{
		$link=NULL;
	}
	public function __sleep()
	{
		return array('host','user','pass','db');
	}
	public function __wakeup()
	{
		seft::__construct();
	}
	*/
	//sử dụng cho SELECT
	public function query($query)
	{
		return $this->link->query($query);	
	}
	
}
