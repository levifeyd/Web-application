<?php session_start();?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Админка</title>
</head>
<body>
<div style="text-align: center">

<?php if (!empty($_SESSION["login"])) :?>

    <?php echo 'Добрый день, '.$_SESSION['login']; ?>
    <br>
    <a href="/logout.php">Выйти</a>
    <br>
    <a href="/admin/contact.php">Контакты</a>
    <a href="">Хэдер</a>
    <a href="/admin/services.php">Услуги</a>
    <a href="/admin/about.php">О нас</a>

<?php else:
    echo '<h2>Доступ закрыт ?</h2>';
    echo '<a href="/">На главную</a>';
?>

    <?php endif ?>
</div>
</body>
</html>