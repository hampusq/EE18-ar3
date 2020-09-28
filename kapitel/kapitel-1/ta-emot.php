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
    echo $_REQUEST["anamn"];
    echo "<br>";
    echo $_REQUEST["pass"];
    echo "<br>";
    echo "Är 18 = " . $_REQUEST["yes"];
    echo "<br>";
    echo "Inte 18 = " . $_REQUEST["no"];
    ?>
</body>
</html>