<!DOCTYPE html>
<html>
<head>
	<title>WT1-Spiel</title>
	<meta charset="UTF-8">

	<link href='https://fonts.googleapis.com/css?family=Rock Salt' rel='stylesheet'>
	<link href='https://fonts.googleapis.com/css?family=Over the Rainbow' rel='stylesheet'>
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	<script src="https://cdn.jsdelivr.net/npm/phaser@3.15.1/dist/phaser-arcade-physics.min.js"></script>

	
</head>
<body>

<?php
	require('score.php');		
	require('databaseConnection.php');
		
	$database = new DatabaseConnection();

	$result = $database->add_highscore($_POST['username'], $_POST['points']);
	
	if($result){
		echo "<p>Highscore wurde erfolgreich gespeichert! Bitte die Seite neu laden.<p>";	
	}
	else{
		echo "<p>Highscore konnte leider nicht gespeichert werden. Bitte die Seite neu laden.</p>";	
	}
?>	

</body>
</html>
