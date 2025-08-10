<?php
require_once '../includes/queries.php';

if (!isset($_GET['id']) || empty($_GET['id'])) {
    header("Location: error.php?message=ID invalide.");
    exit;
}

$personne = getPersonneById($pdo, $_GET['id']);

if (!$personne) {
    header("Location: error.php?message=Personne non trouvée.");
    exit;
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Passeport de <?= htmlspecialchars($personne['prenom']) ?></title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    <div class="passport-container">
        <div class="passport-card">
            <div class="passport-header">
                <h1>République du Code</h1>
                <h2>Document d'Identité</h2>
            </div>

            <div class="passport-body">
                <div class="passport-photo">
                    <img src="../assets/images/profile.avif" alt="Photo de la personne">
                </div>
                <div class="passport-info">
                    <p><span>Nom :</span> <?= htmlspecialchars($personne['nom']) ?></p>
                    <p><span>Prénom :</span> <?= htmlspecialchars($personne['prenom']) ?></p>
                    <p><span>Identifiant :</span> <?= htmlspecialchars($personne['id']) ?></p>
                </div>
            </div>

            <a class="passport-back" href="../index.php">← Retour à la liste</a>
        </div>
    </div>
</body>
</html>
