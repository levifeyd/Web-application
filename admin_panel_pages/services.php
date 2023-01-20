<?php require_once './connect_to_db/connect_to_db.php';?>
<?php
    /** @var CONNECT_TO_DATABSE $pdo */
    $sqlDb = $pdo->prepare("SELECT * FROM services");
    $sqlDb -> execute();
    $getServicesInfoFromQuery = $sqlDb->fetchALL(PDO::FETCH_OBJ);
?>
<div class="site-section">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-7 text-center">
                <h3 style="color: black">Наши услуги</h3>
            </div>
        </div>
        <div class="row">
            <?php foreach ($getServicesInfoFromQuery as $service):?>
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
