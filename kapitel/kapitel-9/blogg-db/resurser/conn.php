<?php
// Inlogg till databas
$host = "localhost";
$db = "blogg";
$user = "blogg";
$pass = "1iLLc3Bos1Ou3Sg5";

// Skapa en anslutning
$conn = new mysqli($host, $user, $pass, $db);



// Gick det bra att ansluta?

if ($conn->connect_error) {
    die("kunde inte ansluta:" . $conn->error);
} else {
    echo "<p>Det gick bra att ansluta till databasen</p>";
}



?>