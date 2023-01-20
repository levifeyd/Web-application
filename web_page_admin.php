<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Админка</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>
<body>
<div style="text-align: center">
<?php if (!empty($_SESSION["login"])) :?>
    <?php echo 'Добрый день, '.$_SESSION['login'].' !'; ?>
    <br>
    <?php echo 'Вы можете отредактировать следующие компоненты сайта'?><br>
    <br>
    <a href="/admin/header.php">Фон страницы</a>
    <a href="/admin/contact.php">Контакты</a>
    <a href="/admin/services.php">Услуги</a>
    <a href="/admin/about.php">О нас<br>
    <br>
    <a href="/logout.php">Выйти</a>
    <br>
<?php else:
    echo '<h2>Доступ закрыт ?</h2>';
    echo '<a href="/">На главную</a>';
?>
    <?php endif ?>
</div>
</body>
</html>