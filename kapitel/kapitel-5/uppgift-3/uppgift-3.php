<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>

</head>
<body>
<div class="container col-6">
        <h1>Adressbok</h1>
        <form action="#" method="POST">
            <label for="namn">Ange ditt namn</label>
            <input type="text" name="namn" id="namn">
            <label for="mail">Ange din mail</label>
            <input type="text" name="mail" id="mail">
            <label for="mail">Ange ditt meddelande</label>
            <textarea name="meddelande" id="meddelande" cols="30" rows="10"></textarea>
            <button type="submit" class="btn btn-primary">Spara</button>
        </form>

        <?php
        // Finns data? (När vi kommer tillbaka till sidan)
        if (isset($_POST["namn"], $_POST["mail"], $_POST["meddelande"])) {

            $namn = $_POST["namn"];
            $email = $_POST["mail"];
            $meddelande = $_POST["meddelande"];

            // Spara snyggt och formaterat i adressboken.

            $handtag = fopen("adressboken.txt", "w");

            fwrite($handtag, "$namn $email\n");
            fwrite($handtag, "$meddelande\n");
  
        
            fclose($handtag);
            
        }
        ?>
    </div>
</body>
</html>