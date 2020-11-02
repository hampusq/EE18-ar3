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
                    <li class="nav-item"><a class="active nav-link" href="blogg.php">Alla inlägg</a></li>
                    <li class="nav-item"><a class="nav-link" href="spara.php">Skriva inlägg</a></li>
                </ul>
            </nav>
        </header>
        <main>
            <?php
            // Vad heter text filen?
            $filnamn = "blogg.txt";

            $allaRader = file("$filnamn");

            foreach ($allaRader as $rad) {
                echo "<p>$rad</p>";
            }

            ?>
        </main>
        <footer>
            2020
        </footer>
    </div>
</body>
</html>