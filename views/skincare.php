<?php
    include_once '../components/product.php';
    require_once '../components/productMapper.php';
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
            <li><a href="cart.php"><input type="submit" id='insertProd' name='insert' value="Shporta"></a></li>
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
    <div class="first-main" id="first-main">
        <p>Pastrues</p>
        <ul class="main-ul">
            <li>
            <?php 
                $object = new ProductMapper();
                $object->getProductsByLowerCategory('pastrues');
            ?>
            </li>
            <li><input type='submit' id='shto' value='Shto në Shportë'></li>
        </ul>
    </div>
    <div class="second-main" id="second-main">
    <p>Hidratues</p>
        <ul class="main-ul">
            <li>
            <?php 
                $object = new ProductMapper();
                $object->getProductsByLowerCategory('hidratues');
            ?>
            </li>
            <li><input type='submit' id='shto' value='Shto në Shportë'></li>
        </ul>
    </div>
    <div class="third-main" id="third-main">
    <p>Serume dhe Tretmane</p>
        <ul class="main-ul">
            <li>
            <?php 
                $object = new ProductMapper();
                $object->getProductsByLowerCategory('serume');
            ?>
            </li>
            <li><input type='submit' id='shto' value='Shto në Shportë'></li>
        </ul>
    </div>
    <div class="fourth-main" id="fourth-main">
    <p>Maska</p>
        <ul class="main-ul">
            <li>
            <?php 
                $object = new ProductMapper();
                $object->getProductsByLowerCategory('maska');
            ?>
            </li>
            <li><input type='submit' id='shto' value='Shto në Shportë'></li>
        </ul>
    </div>
    <div class="fifth-main" id="fifth-main">
    <p>Kujdesi ndaj diellit</p>
        <ul class="main-ul">
            <li>
            <?php 
                $object = new ProductMapper();
                $object->getProductsByLowerCategory('kunderDiellit');
            ?>
            </li>
            <li><input type='submit' id='shto' value='Shto në Shportë'></li>
        </ul>
    </div>
    <div class="sixth-main" id="sixth-main">
    <p>Ushqyes</p>
        <ul class="main-ul">
            <li>
            <?php 
                $object = new ProductMapper();
                $object->getProductsByLowerCategory('ushqyes');
            ?>
            </li>
            <li><input type='submit' id='shto' value='Shto në Shportë'></li>
        </ul>
    </div>
</div>
<?php 
    include('../reusableCode/footer.php');
?>    
</body>
</html>