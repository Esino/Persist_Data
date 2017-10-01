<?php
	require 'Persist_Data.php';
	$conn = Connect();
	$name = $conn->real_escape_string($_POST['Name']);
	$comment = $conn->real_escape_string($_POST['Comment']);
	$query = "INSERT into myComment (Name, Comment) VALUES ('" . $name . "','" . $comment . "')";
	$success = $conn->query($query);

	if (!$success) {
		print_r($conn);
	}
	else{
		die("Couldn't enter data: ".$conn->error);
	}

	echo "Thank you for your comment <br>";

	$conn->close();
?>