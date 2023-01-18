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
    <h1>Редактирование контактной информации</h1>
    <?php if (!empty($_SESSION["login"])) :?>
        <?php echo 'Добрый день, '.$_SESSION['login']; ?>
        <br>
        <a href="/logout.php">Выйти</a>
        <br>
        <?php
            /** @var CONNECT_TO_DATABSE $pdo */
            $sql = $pdo -> prepare("SELECT * FROM contact");
            $sql -> execute();
            $getContactInfoFromQuery = $sql -> fetch(PDO::FETCH_OBJ);
        ?>
        <form action="/admin/contact/changeInfoContact.php" method="post">
        <input type="text" name="city" value="<?php echo $getContactInfoFromQuery->city ?>">
        <input type="text" name="phone" value="<?php echo $getContactInfoFromQuery->phone ?>">
        <input type="text" name="email" value="<?php echo $getContactInfoFromQuery->email ?>">
        <input type="submit" value="Сохранить">
        </form>
    <?php else:
        echo '<h2>Доступ закрыт ?</h2>';
        echo '<a href="/">На главную</a>';
        ?>
    <?php endif ?>
</div>
</body>
</html>