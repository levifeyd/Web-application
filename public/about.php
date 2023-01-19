<?php require_once './connect_to_db/connect_to_db.php';?>
<?php
    /** @var CONNECT_TO_DATABSE $pdo */
    $row = $pdo->prepare("SELECT * FROM about"); // подготовка запроса
    $row -> execute();// выполнение запроса
    $getAboutInfoFromQuery = $row->fetch(PDO::FETCH_OBJ); // about
?>


<div class="site-section">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img src="/admin/img/<?php echo $getAboutInfoFromQuery->filename?>" class="img-fluid">
            </div>
            <div class="col-md-6">

                <h3 style="color: black"><?php echo $getAboutInfoFromQuery->title?></h3>
                <p><?php echo $getAboutInfoFromQuery->description?></p>

            </div>
        </div>
    </div>
</div>
