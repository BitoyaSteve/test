<?php
require_once 'queries.php';

function contientChiffre($str) {
    return preg_match('/\d/', $str);
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nom = trim($_POST['nom']);
    $prenom = trim($_POST['prenom']);

    if (empty($nom) || empty($prenom)) {
        die("Les champs nom et prénom sont requis.");
    }

    if (contientChiffre($nom) || contientChiffre($prenom)) {
        header("Location: ../pages/error.php?message=Le nom et le prénom ne doivent pas contenir de chiffres.");
        exit;
    }

    insertPersonne($pdo, htmlspecialchars($nom), htmlspecialchars($prenom));
    header("Location: ../index.php");
    exit;
} else {
    die("Requête invalide.");
}
