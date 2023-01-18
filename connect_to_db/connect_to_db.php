<?php
    $user = "root";
    $password = "";
    $host = "localhost";
    $db="test";
    $dbh = 'mysql:host='.$host.';dbname='.$db;
    $pdo = new PDO($dbh, $user, $password);