<!DOCTYPE html>
<html>
<head>
	<title>WT1-Spiel</title>
	<meta charset="UTF-8">
	<link href='https://fonts.googleapis.com/css?family=Rock Salt' rel='stylesheet'>
	<link href='https://fonts.googleapis.com/css?family=Over the Rainbow' rel='stylesheet'>
	<link rel="stylesheet" type="text/css" href="styles/style.css" />
	<script src="https://cdn.jsdelivr.net/npm/phaser@3.15.1/dist/phaser-arcade-physics.min.js"></script>

	<script src="js/breakout.js"></script>
</head>
<body>

	<div id="highscore-form">
		<form method="POST" action="result.php">
			<input id="username" type="text" name="username" placeholder="Username..."><br />hat<br /><br />
			<input id="points" type="number" name="points" value="0" readonly="readonly"><br />
			Punkt(e) erreicht! <br />
			<button type="submit">Speichern</button>
		</form>
	</div>

</body>
</html>
