<?php
session_start();

// Task 1
if ($_SERVER["REQUEST_METHOD"] === "GET") 
{
    echo "Data submitted via GET method";
} elseif ($_SERVER["REQUEST_METHOD"] === "POST") 
{
    echo "Data submitted via POST method";
}

// Task 2
if (isset($_GET['url'])) 
{
    $url = $_GET['url'];
    header("Location: $url");
    exit();
} else 
{
    echo "No URL provided";
}

// Task 3
if ($_SERVER["REQUEST_METHOD"] === "POST") 
{
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operator = $_POST['operator'];

    switch ($operator) 
    {
        case '+':
            $result = $num1 + $num2;
            break;
        case '-':
            $result = $num1 - $num2;
            break;
        case '*':
            $result = $num1 * $num2;
            break;
        case '/':
            $result = $num1 / $num2;
            break;
        default:
            $result = "Invalid operator";
    }

    echo "Result: $result";
}

// Task 6
echo "Page requested time: " . date("Y-m-d H:i:s");

// Task 7
if (!isset($_SESSION['counter'])) 
{
    $_SESSION['counter'] = 1;
} else {
    $_SESSION['counter']++;
}

echo "Page visit count: " . $_SESSION['counter'];

// Task 9
setcookie("cookie_name", "cookie_value", time() + 3600, "/", "yourdomain.com", false, true);

if (isset($_COOKIE['cookie_name'])) 
{
    echo "Cookie Value: " . $_COOKIE['cookie_name'];
} else {
    echo "Cookie not set";
}

setcookie("cookie_name", "", time() - 3600, "/");
?>
