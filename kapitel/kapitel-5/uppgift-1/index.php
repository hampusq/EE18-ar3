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
        <h1>Spara text</h1>
        <form action="#" method="POST">
            <!-- Användare matar in ett tal/siffra -->
            <p>Skriv in din text som du vill spara</p>
            <textarea name="sparaText" id="sparaText" cols="30" rows="10"></textarea>
            <button type="submit" class="btn btn-primary mt-5">Spara</button>
        </form>
        <?php
        // Finns data?
        if (isset($_POST["sparaText"])) {

            // Ta emot data från formuläret
            $input = $_POST["sparaText"];

            

            $handtag = fopen("input.txt", "w");

            fwrite($handtag, "$input");

            fclose("input.txt");
            
        }
        ?>
</body>
</html>