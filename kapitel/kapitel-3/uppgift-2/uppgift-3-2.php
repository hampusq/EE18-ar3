<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
<?php 
//     Laugh on Monday, laugh for danger.
//     Laugh on Tuesday, kiss a stranger.
//     Laugh on Wednesday, laugh for a letter.
//     Laugh on Thursday, something better.
//     Laugh on Friday, laugh for sorrow.
//     Laugh on Saturday, joy tomorrow.


$idag = date("1");

    if  ($idag == "Monday")  {
    echo "<p>Laugh on Monday, laugh for danger.</p>";
    }
    elseif ($idag == "Tuesday") {
        echo "<p>Laugh on Tuesday, kiss a stranger.</p>";
    }


    switch ($idag) {
        case 'Monday':
            echo "<p>Laugh on Tuesday, kiss a stranger.</p>";
            break;
        
        default:
        echo "<p>No day selected!</p>";
            break;
    }

    for ($i=0; $i < 11; $i++) { 
        echo "<p>hej $i</p>";
    }
?>
</body>
</html>