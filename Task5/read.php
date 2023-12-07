<?php
include 'config.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Fetch employee details from the database
    $stmt = $pdo->prepare("SELECT * FROM Employees WHERE id = ?");
    $stmt->execute([$id]);
    $employee = $stmt->fetch(PDO::FETCH_ASSOC);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Employee Details</title>
</head>
<body>
    <h1>Employee Details</h1>
    <?php if (isset($employee)): ?>
        <p>ID: <?= $employee['id'] ?></p>
        <p>Name: <?= $employee['Name'] ?></p>
        <p>Address: <?= $employee['Address'] ?></p>
        <p>Salary: <?= $employee['Salary'] ?></p>
    <?php else: ?>
        <p>Employee not found.</p>
    <?php endif; ?>
    <br>
    <a href="index.php">Back to Employee List</a>
</body>
</html>
