// Laden Sie die checkform.js-Datei in der Kassen-Seite ein

// Erstellen Sie eine Funktion, die die Postleitzahl überprüft
function checkPLZ() {
    // Holen Sie sich das Eingabefeld der Postleitzahl
    var plz = document.getElementById("plz");
    // Holen Sie sich den Wert der Eingabe
    // Holen Sie sich den Wert der Eingabe
  var value = plz.value;
  
  
  
    // Prüfen Sie, ob die Länge genau 5 ist
    if (value.length != 5) {
      // Setzen Sie die Klasse des Eingabefeldes auf "error"
      plz.className = "error";
      // Beenden Sie die Funktion
      return;
    }

    
    // Wandeln Sie den Wert zu einer Zahl um
  var number = parseInt(value);
    // Prüfen Sie, ob es sich nur um Zahlen handelt
    if (isNaN(number)) {
      // Setzen Sie die Klasse des Eingabefeldes auf "error"
      plz.className = "error";
      // Beenden Sie die Funktion
      return;
    }
    // Wenn alles in Ordnung ist, setzen Sie die Klasse des Eingabefeldes auf ""
    plz.className = "greenboys";
  }
  
  // Verknüpfen Sie das Eingabefeld-Ereignis mit der Check-Funktion
  plz.addEventListener("blur", checkPLZ);