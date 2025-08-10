<?php
require_once 'db.php';

function getAllPersonnes($pdo) {
    $stmt = $pdo->query("SELECT * FROM personne ORDER BY id DESC");
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getPersonneById($pdo, $id) {
    $stmt = $pdo->prepare("SELECT * FROM personne WHERE id = :id");
    $stmt->execute([':id' => $id]);
    return $stmt->fetch(PDO::FETCH_ASSOC);
}

function insertPersonne($pdo, $nom, $prenom) {
    $stmt = $pdo->prepare("INSERT INTO personne (nom, prenom) VALUES (:nom, :prenom)");
    $stmt->execute([':nom' => $nom, ':prenom' => $prenom]);
}

function updatePersonne($pdo, $id, $nom, $prenom) {
    $stmt = $pdo->prepare("UPDATE personne SET nom = :nom, prenom = :prenom WHERE id = :id");
    $stmt->execute([':nom' => $nom, ':prenom' => $prenom, ':id' => $id]);
}

function deletePersonne($pdo, $id) {
    $stmt = $pdo->prepare("DELETE FROM personne WHERE id = :id");
    $stmt->execute([':id' => $id]);
}
