<?php
    require("database.php");
    echo "Database conncected!";
    $name = $_POST["name"];
    $surname = $_POST["surname"];
    $age = $_POST["age"];
    $email = $_POST["email"];
    $yes = $_POST["yes"];
    echo $name . $surname . $age . $email . $yes;