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
    
    // Rensa från mellanslag i början och slutet på en text

    $email = " karim@gmail.com ";

    $epostTrimmad = trim($email);

    echo "<p>**$email**$epostTrimmad**</p>";

    $svar = "Usa";
    $svarGemena = strtolower($svar);
    $svarVersaler = strtoupper($svar);

    // Hur många tecken är detta i stycke
    $stycke = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque, illo sed. Asperiores sit reiciendis quidem quibusdam, perferendis fugit quas in ratione aut ullam fugiat saepe dicta vel ad ea incidunt?1";

    $antal = strlen($stycke);

    echo "<p>Antal tecken är: $antal</p>";

    // Plocka ut del av sträng
    $email = "hampus_aberg@yahoo.com";
    $domän = substr($email, 13, 22);

    echo "<p>****</p>";
    echo "<p>$domän ur $email";
    $efternamn = substr($email, 7, 5);
    echo "<p>$efternamn ur $email</p>";

    $domän = strstr($email, "@");
    ?>
    </div>
</body>
</html>