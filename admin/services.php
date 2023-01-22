<?php session_start();?>
<?php require_once '../connect_to_db/connect_to_db.php';?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<div style="text-align: center">
    <h1>Админинстративная панель редактирования услуг</h1>
    <?php if (!empty($_SESSION["login"])) :?>
        <?php echo 'Добрый день, '.$_SESSION['login']; ?><br>
            <br>
        <a href="/logout.php">Выйти</a>
            <br>
        <?php

        $db = new PdoConnect();
        $sql = $db->PDO->prepare("SELECT * FROM services");
        $sql->execute();

        while ($getInfoFromQuery = $sql->fetch(PDO::FETCH_OBJ)) : ?>
            <form action="/admin/services/changeInfoServices.php/<?php echo $getInfoFromQuery->id ?>" method="post" enctype="multipart/form-data"><br>
                <input type="text" name="title" value="<?php echo $getInfoFromQuery->title ?>">
                <input type="text" name="price" value="<?php echo $getInfoFromQuery->price ?>"><br>
                <?php echo "Файл :".$getInfoFromQuery->id ?><br>
                <p>
                    <input type="file" name="im">
                </p>
                <input type="submit" name="save" value="Сохранить">
            </form>
            <br>
            <img src="/images/<?php echo $getInfoFromQuery->filename ?>" width="200">
        <?php endwhile?>
    <?php else:
        echo '<h2>Доступ закрыт ?</h2>';
        echo '<a href="/">На главную</a>';
        ?>
    <?php endif ?>
</div>
</body>
</html>
