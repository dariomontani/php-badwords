<!-- Creare una variabile con un paragrafo di testo a vostra scelta.
Stampare a schermo il paragrafo e la sua lunghezza.
Una parola da censurare viene passata dall’utente tramite parametro GET.
Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare. -->

<!-- Ps provate una volta avviato MAMP a richiamare nel terminale il comando php -v  per sapere se sta funzionando php anche da terminale -->

<?php

$text = "Hello World!";
$lunghezza = strlen($text);

$censurata = $_GET["censurata"];
$paragrafoCensurato = str_replace($censurata, "***", $text);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
</head>
<body>

    <p><?php echo $text; ?></p>
    <p>Lunghezza:<?php echo $lunghezza; ?></p>

    <p><?php echo $paragrafoCensurato; ?></p>
    <p><?php echo strlen($paragrafoCensurato); ?></p>

</body>
</html>