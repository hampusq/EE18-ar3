
<?php
/*
* PHP version 7
* @category   Lånekalkylator
* @author     Hampus Åberg <hampus.aberg@elev.ga.ntig.se>
* @license    PHP CC
*/

$user = "hampus";
$db = "labbar";
$host = "localhost";
$pass = "xa7pB5V03iu9UANg";

// Logga in på mysql-server och välj databas
$conn = new mysqli($host, $user, $pass, $db);

// gick det att ansluta=
if ($conn->connect_error) {
    die("Du lyckades inte att ansluta: " . $conn->connect_error);
} else {
    echo "<p>Du är nu ansluten!</p>";
}

// Ställ en fråga
$sql = "SELECT * FROM bilar";
$result =  $conn->query($sql);

// Gick sqld satsen att köra?
if (!$result) {
    die("Något blev fel!");
} else {
    echo "<p>Lista på alla bilar kunde hämtas</p>";
}

// Skriv ut listan på bilar
while ($rad = $result->fetch_assoc()) {
    echo "<p>$rad</p>";
}

// Stäng ned anslutningen
$conn->close();