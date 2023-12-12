<html>
    <head>
        <title>PHP-HTML-Übung </title>
        <meta charset="UTF -8">
    </head>
    <body>
        <?php
            $show_form = TRUE;
            if(isset($_POST["user"])){
                if ($_POST["user"] == "willi" && $_POST["password"] == "pass"){
                    echo "Erfolgreich eingeloggt!";
                    $show_form = FALSE;
                }else{
                    echo "Fehler bei der Anmeldung , bitte erneut versuchen.";
                 }
           }
    
            if($show_form) {
        ?>

        <p>Hier bitte einloggen:</p>
        <form action = "#" method = "post">
            <p>User: <input name = "user" /> Passwort: <input type="password" name = "password" /></p>
            <p><input type = "submit" />
            <input type = "reset" /></p>
        </form>
    </body>
</html>
<?php 
    }
?>