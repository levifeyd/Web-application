<?php require_once '../../connect_to_db/connect_to_db.php';?>
<?php
    if (isset($_POST["save"])) {
        $list=['.php','.zip','.js','.html'];
        foreach ($list as $item) {
            if (preg_match("/$item$/", $_FILES['im']['name'])) exit("Расширение файла не подходит");
        }
        $type = getimagesize($_FILES['im']['tmp_name']);
        if($type  && ($type['mime'] != 'image/png' || $type['mime'] != 'image/jpg' || $type['mime'] != 'image.jpeg' )) {
            if ($_FILES['im']['name'] < 1024 * 1000) {
                $upload = '../img/'.$_FILES['im']['name'];
                if (move_uploaded_file($_FILES['im']['tmp_name'], $upload)) echo "Файл загружен";
                else echo "Ошибка при загрузке файла";
            } else exit("Размер файла превышен");
        } else exit("Тип файла не подходит");
    }
?>
<?php
    $title = $_POST["title"];
    $price = $_POST["price"];

    $url = $_SERVER['REQUEST_URI'];
    $url = explode('/', $url);
    $str = $url[4];



    $sql = "UPDATE services SET title=:title, price=:price, filename=:filename WHERE id=$str";
    /** @var CONNECT_TO_DB $pdo */
    $query = $pdo->prepare($sql);
    $query->execute(["title" => $title, "price" => $price, "filename" => $_FILES['im']['name']]);
//    echo '<meta HTTP-EQUIV="Refresh" content="0; URl=/admin/services.php">';
?>

