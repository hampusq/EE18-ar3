<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Skanna katalog</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="kontainer">
        <h1>Lista alla filer och kataloger</h1>
        <?php
        $katalog = ".";

        // Skanna av katalogen
        $resultat = scandir($katalog);

        var_dump($resultat);
        ?>
    </div>
</body>
</html>