<?php require_once '../connect_to_db/connect_to_db.php';
    session_start();
    $login = $_POST["login"];
    $password = $_POST["password"];

    $db = new PdoConnect();
    $sql = $db->PDO->prepare("SELECT id,login FROM user WHERE login=:login AND password=:password");
    $sql->execute(array('login'=>$login, 'password'=>$password));
    $array = $sql->fetch(PDO::FETCH_ASSOC);


    if ($array["id"] > 0) { // id существует в базе данных
        $_SESSION['login'] = $array["login"];
        header('Location:/web_page_admin.php');
    } else {
        header('Location:/web_page_login.php');
    }