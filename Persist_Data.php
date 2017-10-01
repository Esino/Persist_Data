<?php 

	function Connect(){
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "postDB";
	
		$conn = new mysqli($servername, $username, $password, $dbname) or die("Connection failed:" . $conn->$connect_error);

		return $conn;
	}
	?>