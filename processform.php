<?php
	/*require 'Persist_Data.php';
	$conn = Connect();
	
	$query = "INSERT into myComment (Name, Comment) VALUES ('" . $name . "','" . $comment . "')";
	$success = $conn->query($query);

	if (!$success) {
		print_r($conn);
	}
	else{
		die("Couldn't enter data: ".$conn->error);
	}

	echo "Thank you for your comment <br>";

	$conn->close(); */
	$name = $conn->real_escape_string($_POST['Name']);
	$comment = $conn->real_escape_string($_POST['Comment']);


	class Db{
		private $server;
		private $username;
		private $password;
		private $database;
		private $conn;

		public function __construct(){
			$this->server = 'localhost';
			$this->username = 'root';
			$this->password = '';
			$this->database = 'postDB'; // You can call it whatever

			if(!$this->isConnectionValid()){
				die('Connection is not valid');
			}else{
				$this->conn = new mysqli($this->server, $this->username, $this->password);
			}
		}

		public function isConnectionValid(){
			$conn = new mysqli($this->server, $this->username, $this->password);

			// Check connection
			if ($conn->connect_error){
			    return false;
			}

			return true;
		}

		public function insert($sql){
			if ($this->conn->query($sql) === TRUE) {
			    echo "New record created successfully";
			} else {
			    echo "Error: " . $sql . "<br>" . $conn->error;
			}

			$conn->close();
		}
	}

	$db = new Db();
	$sql = "INSERT INTO myComment (`Name`, `Comment`) VALUES ('" . $name . "','" . $comment . "')";
	$db->insert($sql);

?>