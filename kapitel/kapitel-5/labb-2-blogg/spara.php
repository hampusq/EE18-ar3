<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Min enkla blogg</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <div class="kontainer">
        <header>
            <h1>Bloggen</h1>
            <nav class="navbar navbar-expand-lg navbar-light">
                <ul class="nav nav-tabs">
                    <li class="nav-item"><a class="nav-link" href="blogg.php">Alla inlägg</a></li>
                    <li class="nav-item"><a class="active nav-link" href="spara.php">Skriva inlägg</a></li>
                </ul>
            </nav>
        </header>
        <main>
            <form action="#" method="post">
                <textarea class="form-control" name="inlagg" id="inlagg" cols="30" rows="10"></textarea>
                <button class="btn btn-primary">Spara inlägg</button>

                <?php
                // Ta emot data från formuläret
                if (isset($_POST["inlagg"])) {



                    // Skapa en intern variabel med datan
                    $texten = filter_input(INPUT_POST, "inlagg", FILTER_SANITIZE_STRING);

                    if ($texten) {

                        // Ta bort \n och ersätt med <br>
                        $textMedBr = str_replace("\n", "<br>", $texten);
                        // Vad heter textfilen
                        $filnamn = "blogg.txt";

                        // Är filen skrivbar?
                        if (is_writable($filnamn)) {
                            
                            // Får vi öppna filen?
                            if (!$handtag = fopen($filnamn, 'a')) {
                                
                                exit;
                            } else {
                                # code...
                            }
                            
                        } else {

                        }

                        // Steg 1: Öppna textfilen för att skriva
                        $handtag = fopen($filnamn, "a");

                        // Steg 2: Skriv texten
                        fwrite($handtag, "<br><p>$textMedBr</p>");

                        // Steg 3: Stäng ned anslutningen
                        fclose($handtag);

                        // Skriv ut en bekräftelse
                        echo "<p class=\"alert alert-success\">Din text sparades utan fel</p>";
                    }
                } 
                ?>
        </main>
        <footer>
            2020
        </footer>
    </div>
</body>
</html>