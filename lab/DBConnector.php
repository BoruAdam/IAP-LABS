<?php 
define('DB_SERVER', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'ics113229');
/**
 * 
 */
class DBConnector
{
	public $conn;
	function __construct()
	{
		$this->conn = mysqli_connect(DB_SERVER,DB_USER,DB_PASS) or die("Error: ".$this->conn->connect_error);
		mysqli_select_db($this->conn, DB_NAME);
	}
	public function closeDatabase()
	{
		$this->conn->close();
	}
}


 ?> 
 ?>