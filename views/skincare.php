<?php
    session_start();
    include_once '../components/product.php';
    require_once '../components/productMapper.php';
    $mapper = new ProductMapper();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oriflame</title>
    <link rel="stylesheet" href="../style/skincare.css">
</head>
<?php
    include('../reusableCode/header.php');
?>
<div class="main">
    <p id="titulli">Kujdesi ndaj Lëkurës</p>
    <div class="skincare">
        <ul class="ul1">
            <li class="li1 ul-title">Kategoritë e produkteve</li><br>
            <li class="li1"><a href="#first-main">Pastrues</a></li>
            <li class="li1"><a href="#second-main">Hidratues</a></li>
            <li class="li1"><a href="#third-main">Serume dhe Tretmane</a></li>
            <li class="li1"><a href="#fourth-main">Maska</a></li>
            <li class="li1"><a href="#fifth-main">Kujdesi ndaj diellit</a></li>
            <li class="li1"><a href="#sixth-main">Ushqyes</a></li>
            <?php 
                    if(isset($_SESSION['role']) && $_SESSION['role'] == '1'){
            ?>
                    <li><a href="insertProduct.php"><input type="submit" id='insertProd' name='insert' value="Insert a Product"></a></li>
            <?php 
                    }
            ?>
        </ul>
        <div class="box">
            <div class="text">
                    Kujdesi ndaj lëkurës është një nga gjërat më të rëndësishme për një 
                    fytyrë pa rrudha dhe që shkëlqen.
                    Fillimisht pastrojeni fytyrën – gjeni shamponin që i përshtatet 
                    lëkurës suaj.
                    Pasi ta keni pastruar fytyrën vendosni toner e më pas 
                    kaloni tek një hap tejet i rëndësishëm që është zbutja e 
                    fytyrës. Edhe këtu gjeni kremin që më së miri i përshtatet lëkurës suaj.
                    Para se të dilni jashtë preferohet që të vendosni edhe krem kundër diellit që ta mbroni fytyrën nga rrezet ultra violet.
            </div>
        </div>
        <img src="../images/skincare-bg.jpg">
    </div>
    
    <p>Pastrues</p>
    <div id="first-main">
        <?php
            $products = $mapper->getProductsByLowerCategory('pastrues');
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
    <p>Hidratues</p>
    <div id="second-main">
        <?php
            $products = $mapper->getProductsByLowerCategory('hidratues');
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
    <p>Serume dhe Tretmane</p>
    <div id="third-main">
        <?php
            $products = $mapper->getProductsByLowerCategory('serume');
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
    <p>Maska</p>
    <div id="fourth-main">
        <?php
            $products = $mapper->getProductsByLowerCategory('maska');
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
    <p>Kujdesi ndaj Diellit</p>
    <div id="fifth-main">
        <?php
            $products = $mapper->getProductsByLowerCategory('kunderDiellit');
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
    <p>Ushqyes</p>
    <div id="sixth-main">
        <?php
            $products = $mapper->getProductsByLowerCategory('ushqyes');
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
<?php 
    include('../reusableCode/footer.php');
?>    
</body>
</html>