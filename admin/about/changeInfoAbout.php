<?php require_once '../../connect_to_db/connect_to_db.php';?>
<?php
    require_once('../checkImage.php');
    checkImage();
?>

<?php
    $title=$_POST["title"];
    $description=$_POST["description"];

    $db = new PdoConnect();
    $sql = $db->PDO->prepare("UPDATE about SET title=:title, description=:description, filename=:filename");
    $sql->execute(["title" => $title, "description" => $description, "filename" => $_FILES['im']['name']]);
    echo '<meta HTTP-EQUIV="Refresh" content="0; URl=/admin/about.php">';
?>

