<?php
require_once '../includes/queries.php';

if (isset($_GET['id'])) {
    deletePersonne($pdo, $_GET['id']);
}
header("Location: ../index.php");
exit;
