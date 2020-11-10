<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Skolans salar</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="kontainer">
        <h1>Skolans salar</h1>
        <?php
        // Textfilen som skall läsas in
        $tsvfil = "salar.tsv";
        
        // Är filens läsbar?
        
        if (is_readable($tsvfil)) {
            // Läs in filens alla rader
            $rader = file($tsvfil);

            // Loopa igenom alla rader
            foreach ($rader as $rad) {
                // Skippa första raden om dom 2 första tecknen är id

                if (substr($rad, 0, 2) == "id") {
                    continue;

                    $delar = explode($rad, "\p");

                }
                // Plocka ut det som vi behöver nr/namn, bokbar
                
                
                // Dela upp raden i dess delar
                // $salNrNamn = 
                // $bokbar =
        
                // Visa salar i en tabell med kolumnrubriker: nr/namn, bokbar
                // ...
            }
        } else {
            echo "fel";
        }
        
        
           
        ?>
    </div>
</body>
</html>