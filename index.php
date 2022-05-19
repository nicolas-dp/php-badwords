<!-- Descrizione:
Creare una variabile con un paragrafo di testo a vostra scelta.
Stampare a schermo il paragrafo e la sua lunghezza.
Una parola da censurare viene passata dall'utente tramite parametro GET.
Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare. -->

<?php

$paragraph = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio, numquam ab at facere ratione quod corrupti minima necessitatibus quidem. Unde aperiam aliquid odit repellendus ducimus nisi numquam, culpa eligendi autem?";
//var_dump($paragraph);
//var_dump(strlen($paragraph));

//Stampa senza l'utilizzo dell'HTML
echo $paragraph;
echo strlen($paragraph);

//parola passata dall'utente tramite parametro GET.
$parolaRicerca = $_GET['parola'];
//var_dump($parolaRicerca);
$sostituzionParola = str_replace($_GET['parola'], "***", $paragraph);

//Stampa paragrafo nuovo con asterischi
echo $sostituzionParola;
echo strlen($sostituzionParola);

?>


<!-- Stampa utilizzando HTML -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primo esercizio php</title>
</head>

<body>
    <h1>Primo esercizio PHP</h1>
    <!-- Stampare a schermo il paragrafo e la sua lunghezza. -->

    <h3>PARAGRAFO CON PAROLE TUTTE LE PAROLE IN MOSTRA</h3>
    <p><?php echo $paragraph; ?></p>
    <span>La lunghezza del paragrafo è: <?php echo strlen($paragraph); ?></span>

    <!-- Adesso stampiamo il paragrafo con *** Dopo aver inserito una parola nell'URL http://localhost/PHP/php-badwords/?parola=inserisci parola da cercare, pescandola nel codice con GET -->
    <h3>PARAGRAFO CON PAROLE NASCOSTE DA ***</h3>
    <p><?php echo $sostituzionParola; ?></p>
    <span>La lunghezza del paragrafo è: <?php echo strlen($sostituzionParola); ?></span>

</body>

</html>