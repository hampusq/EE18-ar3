<?php
include "./resurser/conn.php";
?>
<!DOCTYPE html>
<html lang="sv">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>

<body>
<div class="kontainer">
        <h1>Min blogg</h1>
        <nav>
            <ul class="nav nav-tabs">
                <li class="nav-item"><a class="nav-link" href="./lasa.php">Läsa</a></li>
                <li class="nav-item"><a class="nav-link active" href="./skriva.php">Skriva</a></li>
                <li class="nav-item"><a class="nav-link" href="./lista.php">Admin</a></li>
            </ul>
        </nav>
        <form action="#" enctype="multipart/form-data" method="POST">
            <label>Artist <input type="text" name="track_artist"></label>
            <label>Låtnamn <input type="text" name="track_name"></label>
            <label>Ladda up <input type="file" name="uploaded_file"></label>
            <button>Spara</button>
        </form>
        <?php
        // Ta emot det som skickas

               # code...
        
            $track_artist = filter_input(INPUT_POST, 'track_artist', FILTER_SANITIZE_STRING);
            $track_name = filter_input(INPUT_POST, 'track_name', FILTER_SANITIZE_STRING);
            
            

            
            
       

        if ($track_artist) {
            // SQL-satsen

            // Nytt filnamn
            $location = $_FILES['uploaded_file']['tmp_name'];
            
       

           $sql = "INSERT INTO track_table (track_artist, track_name, `location`) VALUES ('$track_artist', '$track_name', '$location')";


            $uploadpath = 'upload/';   // Här läggs filerna som laddas upp
            $allowtype = array('mp3', 'wav'); // Tillåt bara mp3 & wav filer

            // Steg 2: nu kör vi sql-satsen
            $result = $conn->query($sql);

            // Gick det bra att köra SQL-satsen? test123

            if (!$result) {
                die("Något gick fel, prova igen");
            } else {
                echo "<p>Laddade upp filen!</p>";
            }

            // Steg 3: Stänga ned anslutningen
            $conn->close();
        }

        ?>
    </div>
</body>

</html>