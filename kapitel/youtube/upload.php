<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="kontainer">
        <?php
        if (isset($_POST['submit'])) {
            $file = $_FILES['file'];


            // Filens information
            $fileName = $file["name"];
            $fileSize = $file["size"];
            $fileType = $file["type"];
            $fileTempName = $file["tmp_name"];
            $error = $file["error"];

            // Tillåtna filer
            $allowed = ["jpg", "jpeg", "png"];

            // Filtyp
            $delar = explode("/", $fileType);
            $imageType = $delar[1];


            if (in_array($imageType, $allowed)) {
                if ($error === 0) {
                    if ($fileSize <= 1000000) {

                        $fileNameNew = uniqid('', true) . ".$imageType";

                        // File location
                        $fileDestination = "./uppladdat/$fileNameNew";

                        // Flytta filen

                        move_uploaded_file($fileTempName, $fileDestination);

                        echo "<p>$fileNameNew</p>";
                        var_dump($file);

                        echo "<img src=\"$fileDestination\">";


                    } else {
                        echo "<p>Filen är för stor!</p>";
 
                    }
                    
                } else {    
                    echo "<p>Fel!</p>";

                }
            } else {
                echo "<p>Du kan bara ladda upp jpg och png!</p>";
            }

        }
        ?>
    </div>
</body>
</html>