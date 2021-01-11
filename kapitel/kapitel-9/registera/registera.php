
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
    <main>
        <form action="#" method="POST">
            <label>Förnamn <input type="text" name="fnamn" required></label>
            <label>Efternamn <input type="text" name="enamn" required></label>
            <label>Användarnamn <input type="text" name="anamn" required></label>
            <label>Lösenord <input type="password" name="losen1" required></label>
            <label>Upprepa lösenord <input type="password" name="losen2" required></label>
            <button>Registera</button>
        </form>
        <?php
            $fnamn = filter_input(INPUT_POST, "fnamn", FILTER_SANITIZE_STRING);
            $enamn = filter_input(INPUT_POST, "enamn", FILTER_SANITIZE_STRING);
            $anamn = filter_input(INPUT_POST, "anamn", FILTER_SANITIZE_STRING);
            $losen1 = filter_input(INPUT_POST, "losen1", FILTER_SANITIZE_STRING);
            $losen2 = filter_input(INPUT_POST, "losen2", FILTER_SANITIZE_STRING);

            if ($fnamn && $fnamn && $anamn && $losen1 && $losen2) {
                if ($losen1 == $losen2) {

                    $sql = "INSERT INTO user (fnamn, enamn, anamn, hash) VALUES ('Hampus', 'Åberg', 'hampus2', '19203123081230128419248901284')";
                    
                    $conn->query($sql);
                    echo "<p class=\"alert alert-success\">Registrerad<p>";

                } else {
                    echo "<p class=\"alert alert-warning\">Lösenorden matchar inte, försök igen<p>";
                }
                
            }
        ?>
        </div>
        
    </main>
</body>
</html>