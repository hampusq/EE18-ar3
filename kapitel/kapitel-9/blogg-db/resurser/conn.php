<?php
// Inlogg till databas
$host = "localhost";
$db = "blogg";
$user = "blogg";
$pass = "M5iEcZT93Yq3nhaL";

// Steg 1 - skapa en anslutning
$conn = new mysqli($host, $user, $pass, $db);

// Gick det bra att ansluta?
if ($conn->connect_error) {
    die("Kunde inte ansluta: " . $conn->error);
} else {
    echo "<p>Gick bra ansluta till vårt databas!</p>";
}

?>