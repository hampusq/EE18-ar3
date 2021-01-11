<?php
/*
* PHP version 7
* @category   Lånekalkylator
* @author     Hampus Åberg <hampus.aberg@elev.ga.ntig.se>
* @license    PHP CC
*/

$user = "registeraTest";
$db = "registeratest";
$host = "localhost";
$pass = "ugge8RJKj89Hqy5d";

// Logga in på mysql-server och välj databas
$conn = new mysqli($host, $user, $pass, $db);

// gick det att ansluta=
if ($conn->connect_error) {
    die("Du lyckades inte att ansluta: " . $conn->connect_error);
} else {
    echo "<p>Du är nu ansluten!</p>";
}

// Stäng ned anslutningen
// $conn->close();