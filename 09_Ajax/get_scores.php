<?php
	require("databaseConnection.php");
	require("score.php");

	header("Content-Type: application/json; charset=utf-8");
	
	$database = new DatabaseConnection();
		
	$highscores = $database->get_highscores();

	// JSON erzeugen
	$resp = '{ "highscores": [';	

	for ($i = 0; $i < count($highscores); $i++ ){
		$score = $highscores[$i];
		$resp .= json_encode(get_object_vars($score));
		if($i+1 < count($highscores)){
			$resp .= ", ";
		}
	}

	$resp .= " ] }";
	
	// Daten zurückschicken
	echo $resp;
		

?>