<?php
/*
* PHP version 7
* @category   Filhantering
* @author     Hampus Åberg <hampus_aberg@yahoo.com>
* @license    PHP CC
*/
?>

<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mini.css/3.0.1/mini-default.min.css">

</head>
<body>
    <div class="kontainer">
    <?php
    $handtag = fopen("style.css", "r");

    $text = fread($handtag, 10);
    echo "<p>$text</p>";

    fclose($handtag);

    // skriva till en fil
    $handtag = fopen("mandag.txt", "w");

    // Skriv en rad
    fwrite($handtag, "Idag börjar vi med filhatering\n");
    fwrite($handtag, "Vi kollar på fopen() och fread()...\n");

    // Stäng filen
    fclose($handtag);

    // Läs in hela textfilen på en gång
    $rader = file("mandag.txt");

    // Skriv ut raderna en-och-en
    foreach ($rader as $rad) {
        echo $rad;
    }

    // Läs in hela textfilen i en sträng
    $allText = file_get_contents("måndag.txt");
    echo "<p>$allText</p>";

    // Läs in en hemsida från nätet
    $hemsida = file_get_contents("https://vecka.nu/");
    echo "<p>
        $hemsida
    </p>";


    $handtag = fopen("veckanu.html", "w");

    fwrite($handtag, $hemsida);

    fclose($handtag);
    ?>
    </div>
</body>
</html>