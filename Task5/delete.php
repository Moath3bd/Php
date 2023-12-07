<?php
include 'config.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Delete employee from the database
    $stmt = $pdo->prepare("DELETE FROM Employees WHERE id = ?");
    $stmt->execute([$id]);

    header("Location: index.php");
    exit;
}
?>
