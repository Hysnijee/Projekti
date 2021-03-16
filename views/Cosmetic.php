<?php
    include_once '../components/product.php';
    require_once '../components/productMapper.php';
?>
<!DOCTYPE html>
    <head>
        <title>Cosmetics</title>
        <link rel="stylesheet" href="../style/Cosmetics.css">
    </head>
    <body>
        <?php
        include('../reusableCode/header.php');
        ?>

        <main>
            <img src="../images/Cosmetics.PNG">
            <div class="Cosmetics">
                <ul id="ul1"> Products Categories</br></br>
                <li id="li1"><a href="#BathBody">Bath & Body</a></li>
                <li id="li1"><a href="#LipGloss">Lip Gloss</a></li>
                <li id="li1"><a href="#Lip">Lip</a></li>
                <li id="li1"><a href="#Foundation">Foundation</a></li>
                <li id="li1"><a href="#LashMascara">Lash Mascara</a></li>
                <li id="li1"><a href="#Parfume">Parfume</a></li>
                <li id="li1"><a href="#Powder">Powder</a></li>
                <li id="li1"><a href="#Organic">Organic</a></li>
                </ul>
                <img src="../images/photo1.jpg">
            </div>
            
            <div id="BathBody">
                <h4>Bath & Body</h4>
                <div id="Rreshti">
                    <div id="Produkti">
                        <?php 
                        $object = new ProductMapper();
                        $object->getProductsByName('Body Lotion FAIRNESS');
                        ?>
                    </div>
                    <div id="Produkti">
                        <?php 
                        $object = new ProductMapper();
                        $object->getProductsByName('Lotion FAIRNESS');
                        ?>
                    </div>
                    <div id="Produkti">
                        <?php 
                        $object = new ProductMapper();
                        $object->getProductsByName('Bubble Bath');
                        ?>
                    </div>  
                </div>

                <div id="Rreshti">
                    <div id="Produkti">
                        <?php 
                        $object = new ProductMapper();
                        $object->getProductsByName('Feminelle Special Care');
                        ?>
                    </div>
                    <div id="Produkti">
                        <?php 
                        $object = new ProductMapper();
                        $object->getProductsByName('Bubble Bath Sweetheart');
                        ?>
                    </div>
                    <div id="Produkti">
                        <?php 
                        $object = new ProductMapper();
                        $object->getProductsByName('Body & Mind');
                        ?>
                    </div>  
                </div>
            </div>

            /*Hysi a mundesh me pa pse po me qet error nese e marr   getProductsByName, se me marr byName nuk prishet dizajni faqes */

            <div id="LipGloss">
                <h4>Lip Gloss</h4> 
                <?php 
                $object = new ProductMapper();
                $object->getProductsByLowerCategory('Lip Gloss');
                ?>
            </div>
       


            <div id="Lip">
                <h4>Lip </h4>
                <?php 
                $object = new ProductMapper();
                $object->getProductsByLowerCategory('Lip');
                ?>
            </div>


            <div id="Foundation">
                <h4>Foundation</h4>
                <?php 
                $object = new ProductMapper();
                $object->getProductsByLowerCategory('Foundation');
                ?>
            </div>

            <div id="LashMascara">
                <h4>Lash Mascara </h4>
                <?php 
                $object = new ProductMapper();
                $object->getProductsByLowerCategory('Lash Mascara');
                ?>
            </div>



            <div id="Parfume">
                <h4>Parfume</h4>
                <?php 
                $object = new ProductMapper();
                $object->getProductsByLowerCategory('Parfume');
                ?>
            </div>


            <div id="Powder">
                <h4>Powder</h4>
                <?php 
                $object = new ProductMapper();
                $object->getProductsByLowerCategory('Powder');
                ?>
            </div>

            <div id="Organic">
                <h4>Organic Products</h4>
                <?php 
                $object = new ProductMapper();
                $object->getProductsByLowerCategory('Organic Products');
                ?>
            </div>

        </main>


        <?php 
        include('../reusableCode/footer.php');
        ?>
    </body>
</html>