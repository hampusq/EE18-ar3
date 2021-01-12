<?php

include "./resurser/conn.php";
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
                <li class="nav-item"><a class="nav-link" href="./login.php">Login</a></li>
                <li class="nav-item"><a class="nav-link" href="./logout.php">Logout</a></li>
                <li class="nav-item"><a class="nav-link active" href="./registera.php">Registera</a></li>
            </ul>
        </nav>
        <main>
            <form action="#" method="POST" autocomplete="on">
                <label>Förnamn <input type="text" name="fnamn" required></label>
                <label>Efternamn <input type="text" name="enamn" required></label>
                <label>Användarnamn <input type="text" name="anamn" required></label>
                <label>Lösenord <input type="password" name="losen1" required></label>
                <label>Upprepa lösenord <input type="password" name="losen2" required></label>
                <button>Registera</button>
            </form>
            <?php
            // Hämta data och filtrera den
            $fnamn = filter_input(INPUT_POST, "fnamn", FILTER_SANITIZE_STRING);
            $enamn = filter_input(INPUT_POST, "enamn", FILTER_SANITIZE_STRING);
            $anamn = filter_input(INPUT_POST, "anamn", FILTER_SANITIZE_STRING);
            $losen1 = filter_input(INPUT_POST, "losen1", FILTER_SANITIZE_STRING);
            $losen2 = filter_input(INPUT_POST, "losen2", FILTER_SANITIZE_STRING);

            // Kolla om det finns data
            if ($fnamn && $fnamn && $anamn && $losen1 && $losen2) {

                $sql = "SELECT * FROM user WHERE anamn = '$anamn'";
                $result = $conn->query($sql);

                if ($result->num_rows != 0) {
                    echo "<p class=\"alert alert-danger\">Användarnamnet finns redan, vänligen försök igen.</p>";
                } else {

                    if ($losen1 == $losen2) {

                        $hash = password_hash($losen1, PASSWORD_DEFAULT);

                        $sql = "INSERT INTO user (fnamn, enamn, anamn, hash) VALUES ('$fnamn', '$enamn', '$anamn', '$hash')";

                        $conn->query($sql);
                        echo "<p class=\"alert alert-success\">Registrerad<p>";

                        $conn->close();
                    } else {
                        echo "<p class=\"alert alert-danger\">Lösenorden matchar inte, försök igen<p>";
                    }
                }
            }
            ?>
    </div>

    </main>
</body>

</html>