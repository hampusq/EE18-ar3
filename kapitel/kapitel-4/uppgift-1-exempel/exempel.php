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
    // En array dom inehåller länder
    $länder = ["Sverige", "Norge", "Finland", "Danmark"];

    // Skriver ut en array
    echo "<p>$länder[0]</p>";
    echo "<p>$länder[2]</p>";
    echo "<p>$länder[3]</p>";


    // Utöka arrayen
    $länder[] = "Europa";
    print_r($länder);
    echo "<p></p>";


    // Ta bort ett element ur en array (Finland)
    unset($länder[2]);
    print_r($länder);
    echo "<p></p>";
    echo "<br>";

    // Associativ array (Mycket användbart i databas)
    $elever = []; // tomm array
    $elever["Viktor"] = "Gitarr";
    $elever["Lucas"] = "Keyboard";
    $elever["Olle"] = "Munspel";
    print_r($elever);

    echo "<p>Lukas kan spela $elever[Lucas]</p>";
    echo "<br>";

    // Skriver ut en array
    $länder[2] = "Finland";
    echo "<p>$länder[0]</p>";
    echo "<p>$länder[2]</p>";
    echo "<p>$länder[3]</p>";
    echo "<p>$länder[4]</p>";

    echo "<br>";

    echo "<h1>foreach</h1>";
    foreach ($länder as $land) {
        echo "<p>$land</p>";
    }
    
  

    foreach ($elever as $instrument) {
        echo "<p>$instrument</p>";
    }

    foreach ($elever as $key => $instrument) {
        echo "<p>$key spelar $instrument</p>";
    }

    // <!-- Skriv ut som tabell -->
    
    echo "<table>";
    echo "<tr>";
    echo "<td>John</td>";
    echo "<td>Doe</td>";
    echo "</tr>";
    echo "</table>";
    
    echo "<table>";
    foreach ($länder as $land) {
        echo "<tr>";
        echo "<td>$land</td>";
        echo "<tr>";
    }

    echo "</table>";

    // skriv ut arrayen elever som en tabell 
    echo "<table>";
    echo "<tr>";
    echo "<th>Namn</th>";
    echo "<th>Instrument</th>";
    echo "<tr>";
    foreach ($elever as $key => $instrument) {
        echo "<tr>";

        echo "<td>$key</td><td>$instrument</td>";
        echo "";
        echo "<tr>";
    }
    echo "</table>";

    // Splitta en sträng

    $mening = "Vi och våra partners bearbetar personuppgifter såsom IP-adress, unikt ID och browsingdata. Vissa partner begär inte ditt samtycke till att behandla dina data, utan de litar på sitt legitima affärsintresse. Visa vår lista över partners för att se de syften som de tror att de har ett legitimt intresse för och hur du kan göra invändningar mot det.";

    $allaOrd = explode(" ", $mening);

        // skriv ut arrayen elever som en tabell 
        echo "<table>";
        echo "<tr>";
        echo "<th>Namn</th>";
        echo "<th>Namn</th>";
        echo "<tr>";
        foreach ($allaOrd as $key => $ord) {
            echo "<tr>";
            
            $key = $key +1;
            echo "<td>$key</td>";
            echo "<td>$ord</td>";
            echo "";
            echo "<tr>";
        }
        echo "</table>";

    ?>
</body>
</html>