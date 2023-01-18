
<?php require 'public/contact.php';?>
<?php require_once './connect_to_db/connect_to_db.php';?>
<?php
    /** @var CONNECT_TO_DATABSE $pdo */
    $dbSql = $pdo->prepare("SELECT * FROM header");
    $dbSql-> execute();
    $getNameFromQuery = $dbSql->fetch(PDO::FETCH_OBJ); // выводим объект
?>
    <div class="intro-section" style="background-image: url('images/<?php echo $getNameFromQuery->filename?>');">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7 mx-auto text-center" data-aos="fade-up">
                    <h1><?php echo $getNameFromQuery->name?></h1>
                </div>
            </div>
        </div>
    </div>
<?php require 'public/services.php';?>
<?php require 'public/about.php';?>
<?php require 'public/footer.php';?>





