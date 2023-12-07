<?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {
        $name = $_POST["name"];
        echo "<h2>Hello, $name!</h2>";
    }
    ?>