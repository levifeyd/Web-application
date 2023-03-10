<?php require 'admin_panel_public_pages/contact.php';?>
<?php require_once './connect_to_db/connect_to_db.php';?>
<?php
    $db = new PdoConnect();
    $sql = $db->PDO->prepare("SELECT * FROM header");
    $sql->execute();
    $getInfoFromQuery = $sql->fetch(PDO::FETCH_OBJ);
?>
    <div class="intro-section" style="background-image: url('images/<?php echo $getInfoFromQuery->filename?>');">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7 mx-auto text-center" data-aos="fade-up">
                    <h1><?php echo $getInfoFromQuery->name?></h1>
                </div>
            </div>
        </div>
    </div>
<?php require 'admin_panel_public_pages/services.php';?>
<?php require 'admin_panel_public_pages/about.php';?>
<?php require 'admin_panel_public_pages/footer.php';?>





