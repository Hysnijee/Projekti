<?php
    session_start();
    include_once '../components/product.php';
    require_once '../components/productMapper.php';
    include_once '../components/article.php';
    require_once '../components/articleMapper.php';
    $mapper = new ArticleMapper();
    $mapper2 = new ProductMapper();
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
    <main class="Accessories">
        <img src="../images/Accessories.PNG">
            <div class="Accessories">
                <ul id="ul1"> 
                <li id="li1"><a href="#Accessories">Accessories</a></li>
                <li id="li1"><a href="#Jewerly">Jewerly</a></li>
                <li id="li1"><a href="#FashionAccessories">Fashion Accessories</a></li>
                <li id="li1"><a href="#WhatsNew">What's New</a></li>
                <?php 
                    if(isset($_SESSION['role']) && $_SESSION['role'] == '1'){
                ?>
                    <li><a href="insertProduct.php"><input type="submit" id='insertProd' name='insert' value="Insert a Product"></a></li>
                <?php 
                    }
                ?>
            </div>
            <p id="pp"><b>Fashion Up</b></br></br>
            <?php 
                $object = $mapper->getDescriptionByType('Fashion-up');
            ?>
            </p>
            <div id="Accessories"> 
                <h4>Accessories</h4>
                        <?php
                        $products = $mapper2->getProductsByLowerCategory('Accessories');
                        foreach($products as $product){
                        ?>
                        <ul class="list">
                        <li><img src="<?php echo $product['img_path'];?>"></li><br>
                        <li><?php echo $product['name'];?></li><br>
                        <li><?php echo $product['price'];?>€</li><br>
                        <?php 
                        if(isset($_SESSION['role']) && $_SESSION['role'] == '1'){
                        ?>
                        <li><a href=<?php echo "../components/deleteProduct.php?id=" . $product['id'];?>>Delete</a></li><br><br>
                        <?php
                            }
                        ?>
                         </ul>
                        <?php 
                            }
                        ?>
            </div>
            <div id="Jewerly"> 
                <h4>Jewerly</h4>
                <?php
                    $products = $mapper2->getProductsByLowerCategory('Jewerly');
                    foreach($products as $product){
                ?>
                <ul class="list">
                    <li><img src="<?php echo $product['img_path'];?>"></li><br>
                    <li><?php echo $product['name'];?></li><br>
                    <li><?php echo $product['price'];?>€</li><br>
                    <?php 
                        if(isset($_SESSION['role']) && $_SESSION['role'] == '1'){
                    ?>
                    <li><a href=<?php echo "../components/deleteProduct.php?id=" . $product['id'];?>>Delete</a></li><br><br>
                    <?php
                        }
                    ?>
                </ul>
                <?php 
                    }
                ?>
            </div>     
            <div id="FashionAccessories"> 
                <h4>Accessories</h4>
                <?php
                    $products = $mapper2->getProductsByLowerCategory('Fashion Accessories');
                    foreach($products as $product){
                ?>
                <ul class="list">
                    <li><img src="<?php echo $product['img_path'];?>"></li><br>
                    <li><?php echo $product['name'];?></li><br>
                    <li><?php echo $product['price'];?>€</li><br>
                    <?php 
                        if(isset($_SESSION['role']) && $_SESSION['role'] == '1'){
                    ?>
                    <li><a href=<?php echo "../components/deleteProduct.php?id=" . $product['id'];?>>Delete</a></li><br><br>
                    <?php
                        }
                    ?>
                </ul>
                <?php 
                    }
                ?>
                </div>
            </div>
    </main>
    <?php 
        include('../reusableCode/footer.php');
    ?>
</body>
</html>