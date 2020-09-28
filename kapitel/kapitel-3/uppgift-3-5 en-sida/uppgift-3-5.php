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
                    <label for="name">Ange lånebelopp</label>
                    <input type="namn" class="form-control" type="text" name="belopp">
                    <label for="epost">Ange ränta i %</label>
                    <input type="epost" class="form-control" type="text" name="ränta">
                </div>


                <label>Lånetid</label>
                <div class="pass">
                    <!-- Lösenord -->
                    <input type="radio" name="lånetid" value="1" checked> 1 år
                    <input type="radio" name="lånetid" value="3"> 3 år
                    <input type="radio" name="lånetid" value="5"> 5 år

                </div>

                <button type="submit" class="btn btn-primary">Räkna ut</button>
            </form>
            <?php
            // FInns data?
            if (isset($_POST["belopp"], $_POST["ränta"], $_POST["lånetid"])) {
                            // Ta emot data från formuläret
            $belopp = $_POST["belopp"];
            $ränta = $_POST["ränta"];
            $lånetid = $_POST["lånetid"];

            // Start år = 0
            $låneKostnad = $belopp;

            // Räkna ut toala lånekostnaden

            for ($i = 0; $i < $lånetid; $i++) {
                $låneKostnad = $låneKostnad * (1 + $ränta / 100);
            }

            // Skriv ut resultatet
            echo "<p>Den totala lånekostnaded efter $lånetid år blir $låneKostnad</p>";

            }



            ?>
        </div>
    </div>
</body>
</html>