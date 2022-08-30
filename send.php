<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);


    require("database.php");
    echo "Database conncected!";
    $name = $_POST["name"];
    $surname = $_POST["surname"];
    $age = $_POST["age"];
    $email = $_POST["email"];
    $yes = $_POST["yes"];
    $query = "INSERT into users (first_name, last_name, age, yes, Email) VALUES (?,?,?,?,?)";
    $stmt = $conn->prepare($query);
    $stmt->bind_param('sssds', $name, $surname, $age, $yes, $email );
    $stmt->execute();
    $result = $stmt->get_result();    