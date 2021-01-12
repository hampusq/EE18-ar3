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
        <header>Lista</header>
        <nav>
            <ul class="nav nav-tabs">
                <li class="nav-item"><a class="nav-link active" href="./lista.php">Lista</a></li>
                <li class="nav-item"><a class="nav-link" href="./login.php">Login</a></li>
                <li class="nav-item"><a class="nav-link" href="./logout.php">Logout</a></li>
                <li class="nav-item"><a class="nav-link" href="./registera.php">Registera</a></li>
            </ul>
        </nav>

        <main>
            <?php
        

                if (isset($_SESSION["anamn"])) {
                    echo "<p class=\"alert alert-success\">Du är inloggad</p>";
                } else {
                    # code...
                }
                
            ?>
        </main>
    </div>

   
</body>
</html>