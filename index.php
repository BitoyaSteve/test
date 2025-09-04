<?php require_once './includes/queries.php'; ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Liste des personnes</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <h2>Ajouter une personne</h2>
    <?php
        $action = "includes/insert.php";
        $buttonText = "Enregistrer";
        include './includes/formulaire.php';
    ?>

    <h2>Liste des personnes</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Actions</th>
        </tr>
        <?php foreach(getAllPersonnes($pdo) as $personne): ?>
        <tr>
            <td><?= htmlspecialchars($personne['id']) ?></td>
            <td><?= htmlspecialchars($personne['nom']) ?></td>
            <td><?= htmlspecialchars($personne['prenom']) ?></td>
            <td>
                <a href="./pages/detail.php?id=<?= $personne['id'] ?>">👁 Voir</a> |
                <a href="./pages/edit.php?id=<?= $personne['id'] ?>">✏️ Modifier</a> |
                <a href="./pages/delete.php?id=<?= $personne['id'] ?>" onclick="return confirm('Supprimer cette personne ?')">🗑 Supprimer</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
