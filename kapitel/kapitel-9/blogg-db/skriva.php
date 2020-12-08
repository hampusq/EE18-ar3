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
    <div class="kontainer text-center p-5">
        <h1>Min Blogg</h1>
        <nav>
            <ul class="nav nav-tabs">
                <li class="nav-item"><a class="nav-link" href="./lasa.php">Läsa</a></li>
                <li class="nav-item"><a class="nav-link active" href="./skriva.php">Skriva</a></li>
                <li class="nav-item"><a class="nav-link" href="./lista.php">Admin</a></li>
            </ul>
        </nav>
        <form action="#" method="POST">
            <label>Ange Rubrik <input type="text" name="header"></label>
            <label>Ange Text <textarea name="postText"></textarea></label>
            <button>Spara</button>
        </form>
        <?php
        // Ta emot det som skickas
        $header = filter_input(INPUT_POST, 'header', FILTER_SANITIZE_STRING);
        $postText = filter_input(INPUT_POST, 'postText', FILTER_SANITIZE_STRING);

        // Om data finns..
        if ($header && $postText) {
            // Programmets kod
            $sql = "INSERT INTO post (header, postText) VALUES ('$header', '$postText')";
            // Steg 2: Nu kör vi 
            $result = $conn->query($sql);

            // Gick det bra att köra SQL-satsen? test123

            if (!$resultat) {
                die("Något gick fel med SQL-satsen");
            } else {
                echo "<p>Inlagget har registrerats</p>";
            }
            $conn->close();
        }
        ?>
    </div>
</body>

</html>