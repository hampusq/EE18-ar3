<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Formulär</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1 class="display mb-4">Ange två tal</h1>
        <div class="login-form">
            <form action="#" method="POST">
                <div class="name">
                    <label for="name">Tal 1</label>
                    <input type="namn" class="form-control" type="text" name="tal1" required>
                    <label for="epost">Tal 2</label>
                    <input type="epost" class="form-control" type="text" name="tal2" required>
                </div>
                <button type="submit" class="btn btn-primary">Räkna ut</button>
            </form>
            <?php
            // Finns data?
            if (isset($_POST["tal1"], $_POST["tal2"])) {

                // Ta emot data från formuläret
                $tal1 = $_POST["tal1"] + 1;
                $tal2 = $_POST["tal2"];

                if ($tal1 < $tal2) {
                    for ($i = $tal1; $i < $tal2; $i++) {
                        $kvadrat = $i * $i;
                        echo "$kvadrat ";
                    }
                } else {
                    echo "<p>Tal 1 måste vara mindre än 2</p>";
                }
            }
            ?>
        </div>
    </div>
</body>
</html>