<?php
/*
* PHP version 7
* @category   Lånekalkylator
* @author     Hampus Åberg <hampus_aberg@yahoo.com>
* @license    PHP CC
*/

?>

<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container col-4">
        <h1>Sortera namn app</h1>
        <form action="#" method="POST">
            <!-- Namn 1 -->
            <label for="namn">Namn 1</label>
            <input id="namn" class="form-control" type="text" name="namn[]" required>
            <!-- Namn 2 -->
            <label for="namn">Namn 2</label>
            <input id="namn" class="form-control" type="text" name="namn[]" required>
            <!-- Namn 3 -->
            <label for="namn">Namn 3</label>
            <input id="namn" class="form-control" type="text" name="namn[]">
            <!-- Namn 4 -->
            <label for="namn">Namn 4</label>
            <input id="namn" class="form-control" type="text" name="namn[]">

            <!-- Namn 5 -->
            <label for="namn">Namn 5</label>
            <input id="namn" class="form-control" type="text" name="namn[]">
            <button type="submit" class="btn btn-primary mt-5">Sortera namn</button>
        </form>

        <?php
        // Finns data?
        if (isset($_POST["namn"])) {

            // Ta emot data från formuläret
            $namn = $_POST["namn"]; 
            
            // Sortera namnen efter den första bokstaven
            sort($namn);

            // Skriv ut alla namnen på en egen rad

            foreach ($namn as $value) {
                echo "<p>$value</p>";
            }

        }
        ?>
    </div>
</body>
</html>