<!--<!DOCTYPE html>-->
<!--<html>-->
<!--<head>-->
<!--    <meta charset="UTF-8">-->
<!--    <title>Вход в админ панель</title>-->
<!--    <link rel="stylesheet" href="css/bootstrap.min.css">-->
<!--</head>-->
<!--    <body>-->
<!--        <h2 style="text-align: center; padding-top: 80px">Вход в административую панель</h2>-->
<!--    <form action="admin/admin.php" method="post" style="text-align: center; padding-top: 80px">-->
<!--        <div class="form-group">-->
<!--            <input type="text" placeholder="Введите логин" name="login">-->
<!--        </div>-->
<!--        <div class="form-group">-->
<!--            <input type="text" placeholder="Введите пароль" name="password">-->
<!--        </div>-->
<!--        <button type="submit" class="btn btn-primary">Войти</button>-->
<!--    </form>-->
<!--    </body>-->
<!--</html>-->
<!DOCTYPE html>
<html lang="ru">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-cale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title >Форма регистрации</title>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/style.css">
<head>
<body>
<div class="container mt-4">
        <div class="row">
            <div class="col">
                <h1>Форма регистрации</h1>
                <form action="checkUsersInfo/check.php" method="post" size="400 px">
                    <input type="text" class = "form-control" name="login"
                           id="login" placeholder="Введите логин"><br>
                    <input type="text" class="form-control" name="password"
                           id="password" placeholder="Введите пароль"><br>
                    <button class="btn btn-success"
                            type="submit">Зарегистрировать</button>
                </form>
            </div>
            <div class="col">
                <h1>Форма авторизации</h1>
                <form action="checkUsersInfo/login.php" method="post">
                    <input type="text" class = "form-control" name="login"
                           id="login" placeholder="Введите логин"><br>
                    <input type="text" class="form-control" name="password"
                           id="password" placeholder="Введите пароль"><br>
                    <button class="btn btn-success"
                            type="submit">Войти</button>
                </form>
            </div>
        </div>
</div>
</body>
</head>
</html>

