<?php require_once './functions/connect.php';?>
<?php
$sql2 = $pdo->prepare("SELECT * FROM services"); // подготовка запроса
$sql2 -> execute();// выполнение запроса
$services = $sql2->fetchALL(PDO::FETCH_OBJ);
?>
<div class="site-section">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-7 text-center">

                <h3 style="color: black">Наши услуги</h3>
            </div>
        </div>
        <div class="row">


            <?php foreach ($services as $service):?>
            <div class="col-lg-3 col-md-6 mb-lg-0">
                <div class="person">
                    <figure>
                        <img src="images/<?php echo $service->filename?>" class="img-fluid">

                    </figure>
                    <div class="person-contents">
                        <h3><?php echo $service->title?></h3>
                        <span style="color: red;font-weight: bold"><?php echo $service->price?></span>
                    </div>
                </div>
            </div>
            <?php endforeach ?>



        </div>
    </div>
</div>
