<?php
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') 
{   
     $name = $_POST['name'];
    $address = $_POST['address'];
    $salary = $_POST['salary'];

    $stmt = $pdo->prepare("INSERT INTO Employees (Name, Address, Salary) VALUES (?, ?, ?)");
    $stmt->execute([$name, $address, $salary]);

    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Employee</title>
</head>
<body>
    <h1>Create Employee</h1>
    <form method="post">
        <label for="name">Name:</label>
        <input type="text" name="name" required>
        <br>
        <label for="address">Address:</label>
        <input type="text" name="address" required>
        <br>
        <label for="salary">Salary:</label>
        <input type="text" name="salary" required>
        <br>
        <input type="submit" value="Submit">
    </form>
    <br>
    <a href="index.php">Back to Employee List</a>
</body>
</html>
