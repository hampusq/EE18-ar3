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
    <div class="container col-3">
        <h1>Räkna ut ditt betyg</h1>
        <form action="#" method="POST">
            <label for="namn">Provpoäng</label>
            <input id="namn" class="form-control" type="text" name="poäng" required>
            <button type="submit" class="btn btn-primary mt-5">Visa betyg</button>
        </form>

        <?php
        // Finns data? (När vi kommer tillbaka till sidan)
        if (isset($_POST["poäng"])) {

            // Ta emot data från formuläret
            $poäng = $_POST["poäng"];

            // Räkna ut betyg enlight poängen

            if ($poäng < 15) {
                echo "<p>F</p>";
            } elseif ($poäng < 25) {
                echo "<p>E</p>";
            } elseif ($poäng < 35) {
                echo "<p>D</p>";
            } elseif ($poäng < 45) {
                echo "<p>C</p>";
            } elseif ($poäng < 55) {
                echo "<p>B</p>";
            } else {
                echo "<p>A</p>";
            }

        }
        ?>
    </div>
</body>
</html>