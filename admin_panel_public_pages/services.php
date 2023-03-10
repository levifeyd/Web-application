<?php
    require_once './connect_to_db/connect_to_db.php';
    $db = new PdoConnect();
    $sql = $db->PDO->prepare("SELECT * FROM services");
    $sql->execute();
    $getServicesInfoFromQuery = $sql->fetchALL(PDO::FETCH_OBJ);
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
                        <img src="/admin_panel_to_change_pages/img/<?php echo $service->filename?>" class="img-fluid">
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
