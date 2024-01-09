window.onload = loadAllScores;
document.getElementById("update").onclick = loadAllScores;

function getXMLHttpRequest() {	
	var httpReq = null;
	if (window.XMLHttpRequest) {
		httpReq= new XMLHttpRequest();
	} else if (typeof ActiveXObject != "undefined") {
		httpReq= new ActiveXObject("Microsoft.XMLHTTP");
	}
	return httpReq;
}

function loadAllScores(){
	var req = getXMLHttpRequest();
	
	req.onreadystatechange = function () {
		if (req.readyState == 4 && req.status === 200) { 	// Die Antwort des Servers liegt vor
			var highscoreTable = document.getElementById("highscore-entries");
			highscoreTable.innerHTML = "";
			var highscores = JSON.parse(req.responseText).highscores;
			for (var i = 0; i < highscores.length; i++){
				var score = highscores[i];
				highscoreTable.innerHTML += "<tr><td>" + (i+1) + "</td><td>" + score.username + "</td><td>" + score.points + "</td></tr>";
			}
		}
	};
	
	// Diese Zeile sowie die .json werden nur
	// für Aufgabe 2 und 4 benötigt.
	//req.open("GET", "Scores.json", true);
	
	req.open("GET", "get_scores.php", true);
	req.send();	
}

