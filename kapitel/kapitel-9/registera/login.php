<?php

include "./resurser/conn.php";
session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <div class="kontainer">
        <header>Inloggning</header>
        <nav>
            <ul class="nav nav-tabs">
                <li class="nav-item"><a class="nav-link" href="./lista.php">Lista</a></li>
                <li class="nav-item"><a class="nav-link active" href="./login.php">Login</a></li>
                <li class="nav-item"><a class="nav-link" href="./logout.php">Logout</a></li>
                <li class="nav-item"><a class="nav-link" href="./registera.php">Registera</a></li>
            </ul>
        </nav>
        <main>
            <form action="#" method="POST" autocomplete="on">
                <label>Användarnamn <input type="text" name="anamn" required></label>
                <label>Lösenord <input type="password" name="losen" required></label>
                <button>Logga in</button>
            </form>
            <?php
            $anamn = filter_input(INPUT_POST, "anamn", FILTER_SANITIZE_STRING);
            $losen = filter_input(INPUT_POST, "losen", FILTER_SANITIZE_STRING);

            if ($anamn && $losen) {

                // Finns användaren i tabellen?
                $sql = "SELECT * FROM user WHERE anamn = '$anamn'";
                $result = $conn->query($sql);

                if ($result->num_rows == 0) {
                echo "<p class=\"alert alert-danger\">Användaren finns inte</p>";

                } else {
                    // Plocka ut hashet ur tabellen
                    $rad = $result->fetch_assoc();
                    $hash = $rad['hash']; 

                     // Kontrolera lösenordet
                     if (password_verify($losen, $hash)) {
                        echo "<p class=\"alert alert-success\">Lösenordet är rätt</p>";

                        $_SESSION["anamn"] = $anamn;
                      } else {
                        echo "<p class=\"alert alert-danger\">Lösenordet är fel</p>";
                      }
                    }
            }
            ?>
    </div>

    </main>
</body>
</html>