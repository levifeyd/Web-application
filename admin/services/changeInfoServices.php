<?php require_once '../../connect_to_db/connect_to_db.php';?>
<?php
    require_once('../checkImage.php');
    checkImage();

?>
<?php
    $title = $_POST["title"];
    $price = $_POST["price"];

    $url = $_SERVER['REQUEST_URI'];
    $url = explode('/', $url);
    $str = $url[4];// id

    $db = new PdoConnect();
    $sql = $db->PDO->prepare("UPDATE services SET title=:title, price=:price, filename=:filename WHERE id=$str");
    $sql -> execute(["title" => $title, "price" => $price, "filename" => $_FILES['im']['name']]);


    echo '<meta HTTP-EQUIV="Refresh" content="0; URl=/admin/services.php">';
?>

