<?php
    session_start();
    include_once '../components/product.php';
    require_once '../components/productMapper.php';
    include_once '../components/article.php';
    require_once '../components/articleMapper.php';
?>
<!DOCTYPE html>
<head>
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
                $object = new ArticleMapper();
                $object->getDescriptionByType('Fashion-up');
            ?>
            </p>
           
            <div id="Accessories">
                <h4>Accessories</h4>
                <div id="Rreshti">
                    <div id="Produkti">
                        <?php 
                            $object = new ProductMapper();
                            $object->getProductByName('Dragonfly Garnet Earrings');
                        ?>
                    </div>

                    <div id="Produkti">
                        <?php 
                            $object = new ProductMapper();
                            $object->getProductByName('Empower Love Bracelet');
                        ?>
                    </div>

                    <div id="Produkti">
                        <?php 
                            $object = new ProductMapper();
                            $object->getProductByName('Lucky Clover Bracelet');
                        ?>
                    </div>
                </div>

                <div id="Rreshti">
                    <div id="Produkti">
                         <?php 
                            $object = new ProductMapper();
                            $object->getProductByName('Lucky Clover Earrings');
                         ?>
                    </div>

                    <div id="Produkti">
                        <?php 
                            $object = new ProductMapper();
                            $object->getProductByName('Quartz Blossom Ring 19');
                        ?>
                    </div>

                    <div id="Produkti">
                        <?php 
                            $object = new ProductMapper();
                            $object->getProductByName('Rose Pearl Ring 20');
                        ?>
                    </div>
                </div>

                <div id="Rreshti">
                     <div id="Produkti">
                        <?php 
                            $object = new ProductMapper();
                            $object->getProductByName('Feminina Sunglasses');
                        ?>
                    </div>

                    <div id="Produkti">
                        <?php 
                            $object = new ProductMapper();
                            $object->getProductByName('Grace Rose Watch');
                        ?>
                     </div>

                    <div id="Produkti">
                        <?php 
                            $object = new ProductMapper();
                            $object->getProductByName('Essential Watch');
                        ?>
                    </div>
                </div>

                <div id="Rreshti">
                    <div id="Produkti">
                        <?php 
                            $object = new ProductMapper();
                            $object->getProductByName('Galaxy Quartz Ring 17');
                        ?>
                    </div>

                    <div id="Produkti">
                        <?php 
                            $object = new ProductMapper();
                            $object->getProductByName('Savage Hawk´s Eye Ring 16');
                        ?>
                    </div>

                    <div id="Produkti">
                        <?php 
                            $object = new ProductMapper();
                            $object->getProductByName('EClassica Sunglasses');
                        ?>
                    </div>
                </div>


                <div id="Rreshti">
                    <div id="Produkti">
                        <?php 
                            $object = new ProductMapper();
                            $object->getProductByName('Passionate Watch');
                        ?>
                    </div>

                    <div id="Produkti">
                        <?php 
                            $object = new ProductMapper();
                            $object->getProductByName('Passionate Tourmaline Earrings');
                        ?>
                    </div>

                    <div id="Produkti">
                        <?php 
                            $object = new ProductMapper();
                            $object->getProductByName('Exotic Quilted Bag');
                        ?>
                    </div>
                </div>


                <div id="Rreshti">
                    <div id="Produkti">
                        <?php 
                            $object = new ProductMapper();
                            $object->getProductByName('Saga Mist Bag');
                        ?>
                    </div>

                    <div id="Produkti">
                        <?php 
                            $object = new ProductMapper();
                            $object->getProductByName('Bjork Colourful Scarf');
                        ?>
                    </div>

                    <div id="Produkti">
                        <?php 
                            $object = new ProductMapper();
                            $object->getProductByName('Energy Clutch wallet');
                        ?>
                    </div>
                </div>

                <div id="Rreshti">
                     <div id="Produkti">
                        <?php 
                            $object = new ProductMapper();
                            $object->getProductByName('To You Hat in a Box');
                        ?>
                    </div>

                    <div id="Produkti">
                        <?php 
                            $object = new ProductMapper();
                            $object->getProductByName('Laura Knit Scarf');
                        ?>
                    </div>

                    <div id="Produkti">
                        <?php 
                            $object = new ProductMapper();
                            $object->getProductByName('Oceanica Bucket Bag');
                        ?>
                    </div>
                </div>
            </div>
            

            <div id="Jewerly">
                <h4>Jewerly</h4>
                <div id="Rreshti">
                    <div id="Produkti">
                        <?php 
                            $object = new ProductMapper();
                            $object->getProductByName('Dragonfly Garnet Earrings.');
                        ?>
                    </div>

                    <div id="Produkti">
                        <?php 
                            $object = new ProductMapper();
                            $object->getProductByName('Empower Love Bracelet.');
                        ?>
                    </div>

                    <div id="Produkti">
                        <?php 
                            $object = new ProductMapper();
                            $object->getProductByName('Lucky Clover Bracelet.');
                        ?>
                    </div>

                </div>

                <div id="Rreshti">
                    <div id="Produkti">
                        <?php 
                            $object = new ProductMapper();
                            $object->getProductByName('Lucky Clover Earrings.');
                        ?>
                    </div>

                    <div id="Produkti">
                        <?php 
                            $object = new ProductMapper();
                            $object->getProductByName('Quartz Blossom Ring 19.');
                        ?>
                    </div>

                    <div id="Produkti">
                        <?php 
                            $object = new ProductMapper();
                            $object->getProductByName('Rose Pearl Ring 20.');
                        ?>
                    </div>
                </div>

                <div id="Rreshti">
                    <div id="Produkti">
                        <?php 
                            $object = new ProductMapper();
                            $object->getProductByName('Galaxy Quartz Ring 17.');
                        ?>
                    </div>

                    <div id="Produkti">
                        <?php 
                            $object = new ProductMapper();
                            $object->getProductByName('Savage Hawk´s Eye Ring 16.');
                        ?>
                    </div>

                    <div id="Produkti">
                        <?php 
                            $object = new ProductMapper();
                            $object->getProductByName('Passionate Tourmaline Earrings.');
                        ?>
                    </div>
                </div>
            </div>

            <div id="FashionAccessories">
                <h4>Fashion Accessories</h4>     
                <div id="Rreshti">
                    <div id="Produkti">
                        <?php 
                            $object = new ProductMapper();
                            $object->getProductByName('Feminina Sunglasses.');
                        ?>
                    </div>

                    <div id="Produkti">
                        <?php 
                            $object = new ProductMapper();
                            $object->getProductByName('Essential Watch.');
                        ?>
                    </div>

                    <div id="Produkti">
                        <?php 
                            $object = new ProductMapper();
                            $object->getProductByName('EClassica Sunglasses.');
                        ?>
                    </div>  
                </div>

                <div id="Rreshti">
                    <div id="Produkti">
                        <?php 
                            $object = new ProductMapper();
                            $object->getProductByName('Exotic Quilted Bag.');
                        ?>
                    </div>

                    <div id="Produkti">
                        <?php 
                            $object = new ProductMapper();
                            $object->getProductByName('Saga Mist Bag.');
                        ?>
                    </div>

                    <div id="Produkti">
                        <?php 
                            $object = new ProductMapper();
                            $object->getProductByName('Bjork Colourful Scarf.');
                        ?>
                    </div>  
                </div>

                <div id="Rreshti">
                    <div id="Produkti">
                        <?php 
                            $object = new ProductMapper();
                            $object->getProductByName('Energy Clutch wallet.');
                        ?>
                    </div>

                    <div id="Produkti">
                        <?php 
                            $object = new ProductMapper();
                            $object->getProductByName('To You Hat in a Box.');
                        ?>
                    </div>

                    <div id="Produkti">
                        <?php 
                            $object = new ProductMapper();
                            $object->getProductByName('Laura Knit Scarf.');
                        ?>
                    </div>  
                </div>

                <div id="Rreshti">
                    <div id="Produkti">
                        <?php 
                            $object = new ProductMapper();
                            $object->getProductByName('Oceanica Bucket Bag.');
                        ?>
                    </div>
                </div>
            </div>
    </main>

    <?php 
        include('../reusableCode/footer.php');
    ?>
</body>
</html>