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
                <form action="checkUsersInfo/registration.php" method="post" size="400 px">
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

