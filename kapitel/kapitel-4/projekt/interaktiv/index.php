<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Interaktiv berättelse</title>
    <link rel="stylesheet" href="https://cdn.rawgit.com/Chalarangelo/mini.css/v3.0.1/dist/mini-default.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="kontainer">
        <h1>Interaktiv berättelse</h1>
        <?php
        $chatt = "";
        $fråga = 0;

        // Finns data?
        if (isset($_POST["input"], $_POST["chatt"], $_POST["fråga"])) {

            // Ta emot data från formuläret
            $input = $_POST["input"];
            $chatt = $_POST["chatt"];
            $fråga = $_POST["fråga"];

            // Frågor och svar
            $chatt .= "Du> $input\n";

            switch ($fråga) {
                // Första fråga och svaren
                case 1:
                    if ($input == "Ja") {
                        $chatt .= "Bott> Vad ska du plugga?\n";
                        $fråga = 2;
                    } elseif ($input == "Nej") {
                        $chatt .= "Bott> Okej vad tråkigt\n";
                        $fråga = 3;
                    } else {
                        $chatt .= "Bott> Jag förstod inte vad du skrev. Försök en gång till?\n";
                        $fråga = 4;
                    }
                    break;

                    // Andra frågan och svaren
                case 2:
                    if ($input == "php") {
                        $chatt .= "Bott> Okej, tycker du \n";
                        $fråga = 5;
                    } elseif ($input == "kaffe") {
                        $chatt .= "Bott> Jag skall strax servera dig. Skall det vara med mjölk?\n";
                        $fråga = 5;
                    }
                    break;

                case 3:

                    break;
                
                default:
                    # code...
                    break;
            }
        } else {
            $fråga = 1;
            $chatt = "Bott: Ska du plugga idag?\n";
        }
        ?>        
        <form action="#" method="POST">
            <textarea name="chatt" id="" cols="30" rows="10" readonly><?php echo $chatt; ?></textarea>
            <input id="input" class="form-control" type="text" name="input">
            <input type="hidden" name="fråga" value="<?php echo $fråga; ?>">
            <button type="submit" class="btn btn-primary">Skicka</button>
        </form>
    </div>
</body>
</html>