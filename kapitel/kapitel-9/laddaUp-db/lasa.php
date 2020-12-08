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
                <li class="nav-item"><a class="nav-link active" href="./lasa.php">Läsa</a></li>
                <li class="nav-item"><a class="nav-link" href="./skriva.php">Skriva</a></li>
                <li class="nav-item"><a class="nav-link" href="./lista.php">Admin</a></li>
            </ul>
        </nav>

        <?php
        // 2. Ställ en SQL-fråga
        $sql = "SELECT * FROM track_table";
        $result = $conn->query($sql);

        // Gick det bra?
        if (!$result) {
            die("Något blev fel med SQL-satsen.");
        } else {
            echo "<p class=\"alert alert-success\">Inläggen kunde hämtas</p>";
        }

        // Presentera resultatet
        while ($rad = $result->fetch_assoc()) {
            echo "<div class=\"inlagg\">";
            echo "<h5>$rad[track_artist]</h5>";
            echo "<h6>$rad[track_name]</h6>";
            echo "<p>$rad[track_filename]</p>";
            echo "</div>";  
        }

        ?>
    </div>
</body>

</html>