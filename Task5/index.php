<?php
include 'config.php';

// Fetch employees from the database
$stmt = $pdo->prepare("SELECT * FROM Employees");
$stmt->execute();
$employees = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>View Employees</title>
</head>
<body>
    <h1>Employee List</h1>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Address</th>
            <th>Salary</th>
            <th>Actions</th>
        </tr>
        <?php foreach ($employees as $employee): ?>
            <tr>
                <td><?= $employee['id'] ?></td>
                <td><?= $employee['Name'] ?></td>
                <td><?= $employee['Address'] ?></td>
                <td><?= $employee['Salary'] ?></td>
                <td>
                    <a href="read.php?id=<?= $employee['id'] ?>">View</a> |
                    <a href="update.php?id=<?= $employee['id'] ?>">Update</a> |
                    <a href="delete.php?id=<?= $employee['id'] ?>">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
    <br>
    <a href="create.php">Create Employee</a>
</body>
</html>
