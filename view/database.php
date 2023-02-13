<?php
ini_set('display_errors', 1);

 class database{
		public $conn;
	
	public function __construct()
	{
		$this->connect();

	}
	public function connect(){
		$this->conn = mysqli_connect('localhost','root','','e_commerce');
		if(mysqli_connect_error()){
				die("connection failed");
			}
		}
	}
    // echo'dfghfh';
?>