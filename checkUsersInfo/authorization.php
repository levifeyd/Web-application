<?php require_once '../connect_to_db/connect_to_db.php'?>
<?php session_start();?>
<?php
    $login = $_POST["login"];
    $password = $_POST["password"];
/** @var CONNECT_TO_DATABSE $pdo */
    $row = "INSERT INTO user (id, login, password) VALUES (NULL, '$login', '$password')";
    $sql = $pdo->prepare($row);
    $sql->execute();
    $_SESSION['login'] = $login;
    header('Location:/web_page_admin.php');



