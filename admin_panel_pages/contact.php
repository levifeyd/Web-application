<?php require_once './connect_to_db/connect_to_db.php';?>
<?php
    /** @var CONNECT_TO_DATABSE $pdo */
    $sql = $pdo->prepare("SELECT * FROM contact");
    $sql->execute();
    $getInfoFromQuery = $sql->fetch(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html>
<head>
    <title><?php echo $getInfoFromQuery["title"]?></title>
    <meta name="description" content="<?php echo $getInfoFromQuery["description"]?>">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/style.css">
</head>
<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
<div class="site-wrap">
    <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close mt-3">
                <span class="icon-close2 js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div>

    <div class="header-top bg-light">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-6 col-lg-3">
                        <a href = "/web_page_login.php">Авторизация</a>
                    </a>
                </div>
                <div class="col-lg-3 d-none d-lg-block">
                    <div class="quick-contact-icons d-flex">
                        <div class="text">
                            <span class="h4 d-block"><?php echo $getInfoFromQuery["city"]?></span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 d-none d-lg-block">
                    <div class="quick-contact-icons d-flex">
                        <div class="text">
                            <span class="h4 d-block"><?php echo $getInfoFromQuery["phone"]?></span>

                        </div>
                    </div>
                </div>

                <div class="col-lg-3 d-none d-lg-block">
                    <div class="quick-contact-icons d-flex">
                        <div class="text">
                            <span class="h4 d-block"><?php echo $getInfoFromQuery["email"]?></span>

                        </div>
                    </div>
                </div>
                <div class="col-6 d-block d-lg-none text-right">
                    <a href="#" class="d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black"><span
                                class="icon-menu h3"></span></a>
                </div>
            </div>
        </div>
    </div>