<?php session_start();?>
<?php require_once '../connect_to_db/connect_to_db.php';?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Административная панель</title>
</head>
<body>
<div style="text-align: center">
    <h1>Панель редактирования фона Web - страницы</h1>
    <?php if (!empty($_SESSION["login"])) :?>
        <?php echo 'Добрый день, '.$_SESSION['login']; ?>
        <br>
        <a href="/logout.php">Выйти</a>
        <br>
        <?php
        /** @var CONNECT_TO_DATABSE $pdo */
        $sql = $pdo->prepare("SELECT * FROM header");
        $sql->execute();
        $res = $sql->fetch(PDO::FETCH_OBJ);
        ?>
        <form action="/admin/header/changeHeader.php" method="post" enctype="multipart/form-data">
            <input type="text" name="name" value="<?php echo $res->name ?>">
            <p>
                <input type="file" name="im">
            </p>
            <input type="submit" name="save" value="Сохранить">
        </form>
        <br>
        <img src="/images/<?php echo $res->filename ?>" width="200">
    <?php else:
        echo '<h2>Доступ закрыт ?</h2>';
        echo '<a href="/">На главную</a>';
        ?>
    <?php endif ?>
</div>
</body>
</html>
