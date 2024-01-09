<?php
	header("Content-Type: text/html; charset=utf-8");

	require("databaseConnection.php");
	
	$database = new DatabaseConnection();
		
	$result = $database->add_highscore($_POST["username"], $_POST["points"]);

	echo $result;

?>