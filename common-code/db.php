<?php

	function dbConnect(){
		$host = "localhost";
		$user = "root";
		$password = "baymax";
		$database = "zealicon_registrations";
		$conn = new mysqli($host, $user, $password,$database);
		if ($conn->connect_errno) {
		    echo "Failed to connect to MySQL: (" . $conn->connect_errno . ") " . $conn->connect_error;
		    die;
		}
		return $conn;
	}

	function dbDisconnect($conn){
		$conn->close();
	}

?>
