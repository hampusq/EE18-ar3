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
        <h1>Array med namn</h1>
        <form action="#" method="POST">
            <!-- Användare matar in ett tal/siffra -->
            <label for="namn">Ange ett tal/siffra</label>
            <input id="namn" class="form-control" type="text" name="tal" required>
            <button type="submit" class="btn btn-primary mt-5">Sortera namn</button>
        </form>

        
        <?php
        // Finns data?
        if (isset($_POST["tal"])) {

            // Ta emot data från formuläret
            $tal = $_POST["tal"];

            $siffror = ["noll", "ett", "två", "tre", "fyra", "fem", "sex", "sju", "åtta", "nio"];

            var_dump($siffror);
            // Skriv ut svaret

            if ($tal < 10) {
                echo "<p>$siffror[$tal]</p>";
            } else {
                echo "<p>$tal</p>";
            }
            
            
            
        }
        ?>
    </div>
</body>
</html>