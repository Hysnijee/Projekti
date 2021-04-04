<?php
    session_start();
    include_once '../components/product.php';
    require_once '../components/productMapper.php';
    include_once '../components/article.php';
    require_once '../components/articleMapper.php';
    $mapper = new ProductMapper();
    $mapper = new ArticleMapper();
?>
<!DOCTYPE html>
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accessories</title>
    <link rel="stylesheet"  href="../style/accessories.css">
<body>
    <?php
        include("../reusableCode/header.php");
    ?>

    <main>
        <img src="../images/Accessories.PNG">
            <div class="Accessories">
                <ul id="ul1"> 
                <li id="li1"><a href="#Accessories">Accessories</a></li>
                <li id="li1"><a href="#Jewerly">Jewerly</a></li>
                <li id="li1"><a href="#FashionAccessories">Fashion Accessories</a></li>
                <li id="li1"><a href="#WhatsNew">What's New</a></li>
            </div>

            <p id="pp"><b>Fashion Up</b></br></br>
            <?php 
                //$object = new ArticleMapper();
                //$object->getDescriptionByType('Fashion-up');
                $object = $mapper->getDescriptionByType('Fashion-up');
            ?>
            </p>
           
            <div id="Accessories" id="Rreshti" id="Produkti"> 
                <h4>Accessories</h4>
                <?php
                    $products = $mapper->getProductsByLowerCategory('Accessories');
                    foreach($products as $product){
                ?>
                <ul class="list">
                    <li><img src="<?php echo $product['img_path'];?>"></li><br>
                    <li><?php echo $product['name'];?></li><br>
                    <li><?php echo $product['price'];?>€</li><br><br>
                </ul>
                <?php 
                }
                ?>
            </div>

            <div id="Jewerly" id="Rreshti" id="Produkti"> 
                <h4>Accessories</h4>
                <?php
                    $products = $mapper->getProductsByLowerCategory('Jewerly');
                    foreach($products as $product){
                ?>
                <ul class="list">
                <li><img src="<?php echo $product['img_path'];?>"></li><br>
                <li><?php echo $product['name'];?></li><br>
                <li><?php echo $product['price'];?>€</li><br><br>
                </ul>
                <?php 
                }
                ?>
            </div>

            <div id="FashionAccessories" id="Rreshti" id="Produkti"> 
                <h4>Accessories</h4>
                <?php
                    $products = $mapper->getProductsByLowerCategory('Fashion Accessories');
                    foreach($products as $product){
                ?>
                <ul class="list">
                <li><img src="<?php echo $product['img_path'];?>"></li><br>
                <li><?php echo $product['name'];?></li><br>
                <li><?php echo $product['price'];?>€</li><br><br>
                </ul>
                <?php 
                }
                ?>
            </div>
            
            <!-- / -->
    </main>

    <?php 
        include('../reusableCode/footer.php');
    ?>
</body>
</html>