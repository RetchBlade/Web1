plz_check = document.getElementById("plz");
plz_check.addEventListener("focusout", checkFunktion);

function checkFunktion(){
    eingabe = plz_check.value
    if(eingabe.length != 5 && checkZahl(plz_check)) {
        //plz_klasse = document.getElementByClass("form-group form-inline");
        plz_check.classList.add("error");
    }
}

function checkZahl (plz_check) {
    if (isNaN(plz_check)) {
        plz_check.classList.add("error");
    }
}

/**
    Laden Sie sich die Vorgabeseite vom Netzlaufwerk herunter (Sie finden das Netzlaufwerk in Dateien auf der linken Seite unter Labor). Setzen Sie dann die Anforderungen
    Ihres Chefs mittels JavaScript wie folgt um:    
    1. Erstellen Sie ein Skript checkform.js und binden dieses in der Kassen-Seite ein.
    2. Nutzen Sie das Eingabefeld der Postleitzahl, um die Funktionalität umzusetzen.
    3. Verknüpfen Sie das passende Eingabefeld-Ereignis (die Prüfung soll beim Verlassen des Feldes geschehen) mit einer Funktion.
    4. Prüfen Sie in der Check-Funktion, ob die Länge der Eingabe genau 5 entspricht.
    5. Prüfen Sie außerdem, ob es sich nur um Zahlen handelt.
    6. Falls einer der Bedingungen nicht zutrifft, setzen Sie die Klasse des Eingabefeldes auf ”error”, damit diese einen roten Rahmen erhält.
        Führen Sie nur dann Änderungen in den Vorgabedateien durch, wenn dies explizit durch die Aufgabe vorgesehen ist.
 */