<?php 
	$servername = "localhost";
	$username = "root";
	$password = "";
	$db_name = "postDB";
	

	$conn = new mysqli($servername, $username, $password, $db_name);

	if ($conn->connect_error) {
		die("Connection failed:" . $conn->$connect_error);
	}

	$sql = "CREATE TABLE myComment (
			id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
			Name VARCHAR(255) NOT NULL,
			Comment VARCHAR(255) NOT NULL,
			Comment_Date TIMESTAMP )";


	if ($conn->query($sql) === TRUE) {
		echo "Table myComment created successfully";
	}
	else {
		echo "Error creating table:" . $conn->error;
	}

	$conn->close();
?>