<?php require_once '../../connect_to_db/connect_to_db.php';?>
<?php
    $city = $_POST["city"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];

    $db = new PdoConnect();
    $sql = $db->PDO->prepare("UPDATE contact SET city=:city, phone=:phone, email=:email");
    $sql->execute(["city" => $city, "phone" => $phone, "email" => $email]);

    echo '<meta HTTP-EQUIV="Refresh" content="0; URL=/admin/contact.php">';
?>
