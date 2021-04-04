<?php
    session_start();
    include_once '../components/catalog.php';
    require_once '../components/catalogMapper.php';
    $mapper = new CatalogMapper();
    $catalogs = $mapper->getAllCatalogs();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oriflame</title>
    <link rel="stylesheet" href="../style/catalogs.css">
</head>
    <?php
        include('../reusableCode/header.php');
    ?>
    <div class="main">
        <div class="first-main">
            <p>
                Këtu mund të gjeni katalogët e fundit të Oriflame.<br>
                Eksploroni që të shihni produktet më të reja si dhe zbritjet për cdo sezonë!<br>
            </p>
            <?php 
                    if(isset($_SESSION['role']) && $_SESSION['role'] == '1'){
            ?>
                    <a href="insertCatalog.php">Insert a Catalog</a>
            <?php 
                    }
            ?>
        </div>
        <div class="second-main">
            <?php
                foreach ($catalogs as $catalog){
            ?>
            <ul class="inn-list">
                <li><img src="<?php echo $catalog['img_path'];?>"></li><br>
                <li><?php echo $catalog['name'];?></li><br>
                <li><a href="<?php echo $catalog['pdf_path'];?>" target="blank">VIEW</a></li><br>
                <?php 
                    if(isset($_SESSION['role']) && $_SESSION['role'] == '1'){
                ?>
                <li><a id="del-link" href=<?php echo "../components/deleteCatalog.php?id=" . $catalog['id'];?>>Delete</a></li><br><br>
                <?php
                }
                ?>
            </ul>
            <?php
                }
            ?>
        </div>
    </div>
    <?php
        include('../reusableCode/footer.php');
    ?>
</body>
</html>