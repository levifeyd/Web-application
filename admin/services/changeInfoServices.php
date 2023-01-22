<?php require_once '../../connect_to_db/connect_to_db.php';?>
<?php
    if (isset($_POST["save"])) {
        $list=['.php','.zip','.js','.html'];
        foreach ($list as $item) {
            if (preg_match("/$item$/", $_FILES['im']['name'])) exit("Расширение файла не подходит");
        }
        if (empty($_FILES['im']['tmp_name'])) {
            exit ("Пожалуйста загрузите файл.");
        } else {
            $type = getimagesize($_FILES['im']['tmp_name']);
            if ($type && ($type['mime'] != 'image/png' || $type['mime'] != 'image/jpg' || $type['mime'] != 'image/jpeg')) {
                if ($_FILES['im']['name'] < 1024 * 1000) { // проверяем размер загружамемого файла
                    $upload = '../img/' . $_FILES['im']['name']; // файл будет нахоидтся по этому адресу
                    //далее пермещаем файл в папку(upload)
                    if (move_uploaded_file($_FILES['im']['tmp_name'], $upload)) echo "Файл загружен";
                    else echo "Ошибка при загрузке файла.";
                } else exit("Размер файла превышен.");
            } else exit("Тип файла не подходит.");
        }
    }
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

