<?php
$host = "localhost";
$dbname = "gestion_personnes";
$user = "postgres";
$password = "prudenceessonga";

try {
    $pdo = new PDO("pgsql:host=$host;dbname=$dbname", $user, $password);
} catch (PDOException $e) {
    die("Erreur de connexion : " . $e->getMessage());
}
?>
