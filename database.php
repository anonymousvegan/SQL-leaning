<?php
    $hostName = "localhost";
    $userName = "nikola";
    $password = "nikola";
    $dbName = "learning";
    $conn = new mysqli($hostName,$userName,$password,$dbName) or die("Database error");