<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Slumpa fram sex ordspråk</title>
    <link rel="stylesheet" href="https://cdn.rawgit.com/Chalarangelo/mini.css/v3.0.1/dist/mini-default.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    // Skapa en array med tio ordspråk
    $ordsprak[] = "Blyga pojkar får aldrig kyssa vackra flickor.";
    $ordsprak[] = "Gråt inte över spilld mjölk";
    $ordsprak[] = "En svala gör ingen sommar.";
    $ordsprak[] = "Ingen kedja är starkare än sin svagaste länk.";
    $ordsprak[] = "Ju fler kockar desto sämre soppa";
    $ordsprak[] = "En svala gör ingen sommar.";
    $ordsprak[] = "Mota Olle i grind";
    $ordsprak[] = "Kärt barn har många namn";
    $ordsprak[] = "Nöden haver ingen lag.";
    $ordsprak[] = "Kärt barn har många namn";



    // Array för att lagra varje kast   
    $tagna = [];

    for ($i=0; $i < 6; $i++) { 
        # code...
        

    // Slumpa fram ett tal mellan 0 och 9 med funktionen rand()
    $index = rand(0, 9);


    if (!in_array($index, $tagna)) {

        // Skriv ut ordspråket
        echo "<p>$ordsprak[$index]</p>";

        // Spara in det tagna i indexet
        $tagna = $index;
    } else {
        $i--;
    }
    }



  

    // echo ...;
    ?>
</body>
</html>