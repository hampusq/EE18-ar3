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
        echo "<h1>Dagens horoskop</h1>";

        // Hämta sidan
        $sidan = file_get_contents("https://astro.elle.se");

        // Sök början på texten
        $start = strpos($sidan, "c-post_content__wrapper");


        if ($start !== false) {
            echo "<p>Horoskopet började på position $start</p>";
        } else {
            echo "<p>Hittade inte horoskopets början!</p>";
        }

        // Hitta var horosopet slutar
        $slut = strpos($sidan, "c-widget__area", $start);

        if ($slut !== false) {
            echo "<p>Horoskopet slutar på position $slut</p>";
        } else {
            echo "<p>Hittade inte horoskopets början!</p>";
        }

        $horoskopText = substr($sidan, $start + 26, $slut - $start);



        for ($i = 0; $i < 24; $i++) {
            // första delen före annonsen
            $start = strpos($horoskopText, "<div class=\"o-indenter\">", $slut);
            $slut = strpos($horoskopText, "</div>", $start);
            $del2 = substr($horoskopText,  $start, $slut - $start);
            echo "$del2</div>\n";
        }

        ?>
    </div>
</body>
</html>