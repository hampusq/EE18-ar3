<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
    <div class="container col-6">
        <h1>Spara text</h1>
        <form action="#" method="POST">
            <!-- Användare matar in ett tal/siffra -->
            <p>Skriv in din text som du vill spara</p>
            <textarea name="filnamn" id="filnamn" cols="30" rows="10"></textarea>
            <button type="submit" class="btn btn-primary mt-5">Spara</button>
        </form>
        <?php
        // Finns data?
        if (isset($_POST["filnamn"])) {

            // Ta emot data från formuläret
            $filnamn = $_POST["filnamn"];

            // Läs in hela textfilen på en gång
            $rader = file("$filnamn");

            // Skriv ut raderna en-och-en
            foreach ($rader as $rad) {
                echo $rad;
            }
        }
        ?>
</body>
</html>