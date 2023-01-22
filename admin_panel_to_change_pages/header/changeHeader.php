<?php
    require_once '../../connect_to_db/connect_to_db.php';
    require_once('../checkImage.php');
    checkImage();
    $name = $_POST["name"];
    $filename =  $_FILES['im']['name'];

    $db = new PdoConnect();
    $sql = $db->PDO->prepare("UPDATE header SET name=:name, filename=:filename");
    $sql->execute(["name" => $name, "filename" => $_FILES['im']['name']]);
    echo '<meta HTTP-EQUIV="Refresh" content="0; URl=/admin/header.php">';

