<?php
include "./resurser/conn.php";
?>
<!DOCTYPE html>
<html lang="sv">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>

<body>
<div class="kontainer">
        <h1>Min blogg</h1>
        <nav>
            <ul class="nav nav-tabs">
                <li class="nav-item"><a class="nav-link" href="./lasa.php">Läsa</a></li>
                <li class="nav-item"><a class="nav-link active" href="./skriva.php">Skriva</a></li>
                <li class="nav-item"><a class="nav-link" href="./lista.php">Admin</a></li>
            </ul>
        </nav>
        <form action="#" method="POST">
            <label>Ange rubrik <input type="text" name="header"></label>
            <label>Ange text <textarea name="postText"></textarea></label>
            <button>Spara</button>
        </form>
        <?php
        // Ta emot det som skickas
        $header = filter_input(INPUT_POST, 'header', FILTER_SANITIZE_STRING);
        $postText = filter_input(INPUT_POST, 'postText', FILTER_SANITIZE_STRING);

        // Om data finns..
        if ($header && $postText) {
            // SQL-satsen
            $sql = "INSERT INTO inlagg (header, postText) VALUES ('$header', '$postText')";

            // Steg 2: nu kör vi sql-satsen
            $result = $conn->query($sql);

            // Gick det bra att köra SQL-satsen? test123

            if (!$resultat) {
                die("Något gick fel med SQL-satsen");
            } else {
                echo "<p>Inläggen kunde skrivas</p>";
            }

            // Steg 3: Stänga ned anslutningen
            $conn->close();
        }
        ?>
    </div>
</body>

</html>