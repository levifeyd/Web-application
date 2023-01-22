<?php require_once './connect_to_db/connect_to_db.php';?>
<?php
    $db = new PdoConnect();
    $sql = $db->PDO->prepare("SELECT * FROM about");
    $sql->execute();
    $getInfoFromQuery = $sql->fetch(PDO::FETCH_OBJ);
?>
<div class="site-section">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img src="/admin/img/<?php echo $getInfoFromQuery->filename?>" class="img-fluid">
            </div>
            <div class="col-md-6">
                <h3 style="color: black"><?php echo $getInfoFromQuery->title?></h3>
                <p><?php echo $getInfoFromQuery->description?></p>
            </div>
        </div>
    </div>
</div>
