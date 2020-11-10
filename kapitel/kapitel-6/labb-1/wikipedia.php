<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dagens horoskop</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="kontainer">
        <?php
        echo "<h1>Info om FL Studio</h1>";

        // Hämta sidan
        $sidan = file_get_contents("https://sv.wikipedia.org/wiki/FL_Studio");

        // Sök början på texten
        $start = strpos($sidan, "<b>");


        if ($start !== false) {
            echo "<p>Horoskopet började på position $start</p>";
        } else {
            echo "<p>Hittade inte horoskopets början!</p>";
        }

        // Hitta var horosopet slutar
        $slut = strpos($sidan, "använder FL Studio.", $start);

        if ($slut !== false) {
            echo "<p>Horoskopet slutar på position $slut</p>";
        } else {
            echo "<p>Hittade inte horoskopets början!</p>";
        }

        $horoskopText = substr($sidan, $start, $slut - $start);

        echo "<p>$horoskopText</p>";

        


        ?>
    </div>
</body>
</html>