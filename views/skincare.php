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
            <li><a href="insertProduct.php"><input type="submit" id='insertProd' name='insert' value="Shto Produkt"></a></li>
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
    <div id="pastrues">
        <div class="row">
            <div id="Produkti">
                <?php 
                    $object = new ProductMapper();
                    $object->getProductByName('NovAge Vaj Pastrues për Fytyrë');
                ?>
            </div>

            <div id="Produkti">
                <?php 
                    $object = new ProductMapper();
                    $object->getProductByName('Optimals Even Out Pastrues Shkumoz');
                ?>
            </div>

            <div id="Produkti">
                <?php 
                    $object = new ProductMapper();
                    $object->getProductByName('Pure Skin 2-në-1 Pastrim & Skrab');
                ?>
            </div>
        </div>

        <div class="row">
            <div id="Produkti">
                    <?php 
                    $object = new ProductMapper();
                    $object->getProductByName('Love Nature Pastrues me Tërshërë');
                    ?>
            </div>

            <div id="Produkti">
                <?php 
                    $object = new ProductMapper();
                    $object->getProductByName('Optimals Hydra Micellar Ujë Pastrues');
                ?>
            </div>

            <div id="Produkti">
                <?php 
                    $object = new ProductMapper();
                    $object->getProductByName('Essentials me Vitamin E & Vaj Kanol');
                ?>
            </div>
        </div>
    </div>

    <div id="ushqyes">
        <div class="row">
                <div id="Produkti">
                <?php 
                    $object = new ProductMapper();
                    $object->getProductByName('NovAge Bright Sublime Set');
                ?>
            </div>

            <div id="Produkti">
                <?php 
                    $object = new ProductMapper();
                    $object->getProductByName('Tender Care Balsam Mbrojtës me Vaj Organik të Farës së Shegës');
                ?>
                </div>

            <div id="Produkti">
                <?php 
                    $object = new ProductMapper();
                    $object->getProductByName('Eco Beauty Krema për Fytyrë');
                ?>
            </div>
        </div>

        <div class="row">
            <div id="Produkti">
                <?php 
                    $object = new ProductMapper();
                    $object->getProductByName('NovAge Time Restore Krema Regjenerative e Natës');
                ?>
            </div>

            <div id="Produkti">
                <?php 
                    $object = new ProductMapper();
                    $object->getProductByName('NovAge Ultimate Lift Set');
                ?>
            </div>

            <div id="Produkti">
                <?php 
                    $object = new ProductMapper();
                    $object->getProductByName('Milk & Honey Gold Kremë e Ditës Ushqyese');
                ?>
            </div>
        </div>
    </div>

    <div id="hidratues">
        <div class="row">
            <div id="Produkti">
                <?php 
                    $object = new ProductMapper();
                    $object->getProductByName('Essentials me Vitamin E & Vaj Kanoli');
                ?>
            </div>

            <div id="Produkti">
                <?php 
                    $object = new ProductMapper();
                    $object->getProductByName('NovAge Bright Sublime Kremë e Ditës');
                ?>
            </div>

            <div id="Produkti">
                <?php 
                    $object = new ProductMapper();
                    $object->getProductByName('NovAge Bright Sublime Kremë e Natës');
                ?>
            </div>
        </div>


        <div class="row">
            <div id="Produkti">
                <?php 
                    $object = new ProductMapper();
                    $object->getProductByName('RoyalVelvet për ripërtrirjen e lëkurës');
                ?>
            </div>

            <div id="Produkti">
                <?php 
                    $object = new ProductMapper();
                    $object->getProductByName('Diamond Cellular për ripërtrirjen e lëkurës');
                ?>
            </div>
        </div>
    </div>

    <div id="serume">
        <div class="row">
                <div id="Produkti">
                <?php 
                    $object = new ProductMapper();
                    $object->getProductByName('Optimals Serum Antioksidant');
                ?>
            </div>

            <div id="Produkti">
                <?php 
                    $object = new ProductMapper();
                    $object->getProductByName('NovAge mbrojtës kundër akneve');
                ?>
            </div>

            <div id="Produkti">
                <?php 
                    $object = new ProductMapper();
                    $object->getProductByName('NovAge Ecollagen Wrinkle Power');
                ?>
            </div>
        </div>
    
        <div class="row">
            <div id="Produkti">
                <?php 
                    $object = new ProductMapper();
                    $object->getProductByName('Pure Skin SOS Spot Xhel');
                ?>
            </div>

            <div id="Produkti">
                <?php 
                    $object = new ProductMapper();
                    $object->getProductByName('Love Nature Vaj me Dru Caji');
                ?>
            </div>
        </div>
    </div>

    <div id="maska">
        <div class="row">
            <div id="Produkti">
                <?php 
                    $object = new ProductMapper();
                    $object->getProductByName('Pure Skin pë Pastrimin e Pucrrave të Zeza');
                ?>
            </div>

            <div id="Produkti">
                <?php 
                    $object = new ProductMapper();
                    $object->getProductByName('Love Nature Maskë Argjile Rrodhe');
                ?>
            </div>

            <div id="Produkti">
                <?php 
                    $object = new ProductMapper();
                    $object->getProductByName('NovAge Maskë Fortësuese për Fytyrë');
                ?>
            </div>
        </div>

        <div class="row">
            <div id="Produkti">
                <?php 
                    $object = new ProductMapper();
                    $object->getProductByName('Set Maskë Argjile (Pajisjet për Pastrim)');
                ?>
            </div>
        </div>
    </div>

    <div id="kunderDiellit">
        <div class="row">
            <div id="Produkti">
                <?php 
                    $object = new ProductMapper();
                    $object->getProductByName('NovAge Ultimate Lift Contour Define SPF15');
                ?>
            </div>

            <div id="Produkti">
                <?php 
                    $object = new ProductMapper();
                    $object->getProductByName('Optimals Urban UV Mbrojtje gjatë ditës FM30');
                ?>
            </div>

            <div id="Produkti">
                <?php 
                    $object = new ProductMapper();
                    $object->getProductByName('Sprej për Trup dhe për Fytyrë SPF 50');
                ?>
            </div>  
        </div>

        <div class="row">
            <div id="Produkti">
                <?php 
                    $object = new ProductMapper();
                    $object->getProductByName('Losion për Trup dhe për Fytyrë SPF 30');
                ?>
            </div>

            <div id="Produkti">
                <?php 
                    $object = new ProductMapper();
                    $object->getProductByName('Xhel për Trup dhe për Fytyrë pas Diellit');
                ?>
            </div> 
        </div>
    </div>
</div>
<?php 
    include('../reusableCode/footer.php');
?>    
</body>
</html>