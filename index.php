<?php
    /*
    Descrizione:
        Creare un form PHP che permetta di inviare due campi: un paragrafo ed una parola da censurare.
        Gestire il tutto con due file diversi.
        Il primo file dovrà permettere all'utente di inserire i dati e inviare la richiesta al server.
        Il secondo file riceverà la richiesta ed eseguirà queste operazioni:
        - stampare a schermo il paragrafo e la sua lunghezza
        - stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare
    */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-badwors</title>
</head>
<body>
    <div>
        <form action="./about.php" method="POST">

            <textarea name="paragrafo" id="" cols="30" rows="10"></textarea>
            <input type="text" name="badword" value="">

            <button type="submit">
                Manda
            </button>
        </form>
    </div>
</body>
</html>