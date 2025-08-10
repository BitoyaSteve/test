<?php
require_once '../includes/queries.php';

if (!isset($_GET['id'])) {
    die("ID invalide.");
}
$id = $_GET['id'];
$personne = getPersonneById($pdo, $id);

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nom = htmlspecialchars(trim($_POST['nom']));
    $prenom = htmlspecialchars(trim($_POST['prenom']));
    updatePersonne($pdo, $id, $nom, $prenom);
    header("Location: ../index.php");
    exit;
}

$action = "";
$nom = $personne['nom'];
$prenom = $personne['prenom'];
$buttonText = "Modifier";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Modifier</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    <h2>Modifier la personne</h2>
    <?php include '../includes/formulaire.php'; ?>
    <a href="../index.php">← Retour</a>
</body>
</html>
