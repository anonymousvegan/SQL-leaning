<?php
    $hostName = "localhost";
    $userName = "nikola";
    $password = "learning";
    $dbName = "learning";
    $conn = new mysqli($hostName,$userName,$password,$dbName) or die("Database error");