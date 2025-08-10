<?php
$message = $_GET['message'] ?? "Une erreur inconnue est survenue.";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Erreur</title>
    <link rel="stylesheet" href="../assets/css/style.css">
    <style>
        .error-container {
            padding: 30px;
            background: #ffe0e0;
            border: 1px solid #cc0000;
            border-radius: 8px;
            max-width: 600px;
            margin: 40px auto;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="error-container">
        <h2>❌ Une erreur est survenue</h2>
        <p><?= htmlspecialchars($message) ?></p>
        <a href="../index.php">← Retour à l'accueil</a>
    </div>
</body>
</html>
