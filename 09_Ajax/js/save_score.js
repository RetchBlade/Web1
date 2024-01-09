
document.getElementById("save").onclick = addScore;

function getXMLHttpRequest() {	
	var httpReq = null;
	if (window.XMLHttpRequest) {
		httpReq= new XMLHttpRequest();
	} else if (typeof ActiveXObject != "undefined") {
		httpReq= new ActiveXObject("Microsoft.XMLHTTP");
	}
	return httpReq;
}

function addScore(){
	var points = document.getElementById("points").value;
	var username = document.getElementById("username").value;
	var req = getXMLHttpRequest();
	req.onreadystatechange = function() {
		if (req.readyState == 4 && req.status === 200) { 	// Die Antwort des Servers liegt vor
			if(req.responseText == "1"){
				alert("Erfolgreich gespeichert! Seite wird neu geladen, um das Spiel zurückzusetzen...");
				location.reload(true);
			}
		}
	};
	req.open("POST", "write_score.php", true);
	req.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	req.send("username=" + username + "&points=" + points);	
}



