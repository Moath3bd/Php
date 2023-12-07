<?php
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Handle form submission
    $id = $_POST['id'];
    $name = $_POST['name'];
    $address = $_POST['address'];
    $salary = $_POST['salary'];

    $stmt = $pdo->prepare("UPDATE Employees SET Name = ?, Address = ?, Salary = ? WHERE id = ?");
    $stmt->execute([$name, $address, $salary, $id]);

    header("Location: index.php");
    exit;
} elseif (isset($_GET['id'])) {
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
    <title>Update Employee</title>
</head>
<body>
    <h1>Update Employee</h1>
    <?php if (isset($employee)): ?>
        <form method="post">
            <input type="hidden" name="id" value="<?= $employee['id'] ?>">
            <label for="name">Name:</label>
            <input type="text" name="name" value="<?= $employee['Name'] ?>" required>
            <br>
            <label for="address">Address:</label>
            <input type="text" name="address" value="<?= $employee['Address'] ?>" required>
            <br>
            <label for="salary">Salary:</label>
            <input type="text" name="salary" value="<?= $employee['Salary'] ?>" required>
            <br>
            <input type="submit" value="Update">
        </form>
    <?php else: ?>
        <p>Employee not found.</p>
    <?php endif; ?>
    <br>
    <a href="index.php">Back to Employee List</a>
</body>
</html>
