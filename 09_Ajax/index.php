<!DOCTYPE html>
<html>
<head>
	<title>WT1-Spiel</title>
	<meta charset="UTF-8">
	<link href='https://fonts.googleapis.com/css?family=Rock Salt' rel='stylesheet'>
	<link href='https://fonts.googleapis.com/css?family=Over the Rainbow' rel='stylesheet'>
	<link rel="stylesheet" type="text/css" href="styles/style.css" />
</head>
<body>
	<?php
		/*require('score.php');		
		require('databaseConnection.php');
		
		$database = new DatabaseConnection();
		
		$highscores = $database->get_highscores();*/

	?>
	<div id="header" class="header">
		<div id="hero-header">
			<h1>Breakout</h1>
			<h2>Vom Kurs Moderne Webtechnologien 1 im B.Sc. Informatik, Hochschule Bochum</h2>
		</div>
		<div class="nav">
			<div id="brand">
				Breakout			
			</div>
			<ul id="menu">
				<li><a href="#about">About</a></li>
				<li><a href="#game">Zum Spiel</a></li>
				<li><a href="#highscore">Highscores</a></li>
				<li><a href="#contact">Kontakt</a></li>
			</ul>
		</div>
	</div>

	<div class="main">
		<div id="about" class="section">
			<h3>Über das WT1-Spiel</h3>
			<p>
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nec dignissim metus. Nam auctor tincidunt elit at volutpat. Duis iaculis ipsum sem, sit amet malesuada mauris efficitur non. Praesent tempor magna vitae mauris fermentum semper. Quisque libero quam, fermentum vitae suscipit luctus, finibus nec nunc. Pellentesque mi ligula, placerat a faucibus et, tincidunt et felis. Pellentesque dui nunc, porttitor sit amet tellus eget, sodales sollicitudin orci. Fusce in gravida justo. Mauris vitae interdum ligula. Sed blandit elit et lorem tempor sagittis. Maecenas quis metus luctus, maximus lacus quis, interdum nunc. Phasellus pulvinar ut odio et placerat.
			</p>
			<p>
				Nunc sed sapien sem. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam pharetra, dui in ullamcorper semper, sapien augue porta tortor, ac elementum tortor dui id ligula. Integer rhoncus ligula dui, ut rutrum enim ornare a. Sed sem neque, tristique in lobortis quis, egestas quis augue. Proin vitae aliquam orci. Sed scelerisque id quam sit amet ultricies. Suspendisse eget viverra nisl, nec porttitor turpis. Duis lobortis velit vitae quam faucibus tempus.
			</p>
			<p>
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec id ipsum laoreet metus tincidunt cursus vel sed justo. Morbi et turpis et enim tincidunt elementum et id massa. Nulla placerat, odio vitae elementum vestibulum, arcu felis commodo metus, sed placerat purus dolor eget tellus. Fusce pharetra velit at nibh laoreet pulvinar. Duis vel commodo velit. Cras rhoncus dignissim purus ac venenatis. Praesent rhoncus sagittis orci vel blandit. Mauris aliquet diam in eros dignissim, venenatis dapibus felis lacinia. Cras viverra velit vitae mi feugiat ultrices. Mauris interdum tincidunt lectus, eu pellentesque elit ornare at. Vivamus ac suscipit ligula, sit amet hendrerit sapien. Phasellus non ante metus. Mauris iaculis augue ac neque lobortis, nec cursus dolor pulvinar.			
			</p>
		</div>

		<hr />

		<div id="game" class="section">
			<h3>Das Spiel</h3>

			<p>Hier könnte eine lange Erklärung stehen oder Sie fangen einfach direkt an, zu spielen!</p>

			<iframe src="game.php" name="Breakout" width="800" height="850" frameborder="0" scrolling="no">Der Browser unterstützt keine iframes, Spiel konnte nicht geladen werden.</iframe>
			
		</div>
		
		<hr />
		
		<div id="highscore" class="section">
			<h3>Highscores</h3>
			<button type="button" id="update">Update</button><!-- added -->
			<table>
				<thead>
					<tr>
						<th>#</th> <th>Username</th> <th>Punkte</th>
					</tr>
				</thead>
				<tbody id="highscore-entries"><!-- modified -->
				</tbody>			
			</table>		
		</div>


		<hr />

		<div id="contact" class="section">
			<h3>Kontakt</h3>
		
			<div class="address">
				Kurs Webtechnologien 1<br />
				Hochschule Bochum <br />
				Lennershofstraße 140<br />
				44801 Bochum<br />
				Deutschland
			</div>	
		</div>
	</div>

	<div class="footer">
		<div id="copyright">
			&copy; 2020 WT1-Kurs
		</div>
		
		<ul id="legal"> 
			<li><a href="">Impressum</a></li>
			<li><a href="">Haftungsausschluss</a></li>
			<li><a href="">Datenschutzerklärung</a></li>
		</ul>
	</div>
	
	<script src="js/load_scores.js"></script> <!-- added -->

</body>
</html>
