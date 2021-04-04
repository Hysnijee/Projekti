<?php
    session_start();
    include_once '../components/product.php';
    require_once '../components/productMapper.php';
    $mapper = new ProductMapper();
?>
?>
<!DOCTYPE html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
                        $object->getProductByName('Body Lotion FAIRNESS');
                        ?>
                    </div>
                    <div id="Produkti">
                        <?php 
                        $object = new ProductMapper();
                        $object->getProductByName('Lotion FAIRNESS');
                        ?>
                    </div>
                    <div id="Produkti">
                        <?php 
                        $object = new ProductMapper();
                        $object->getProductByName('Bubble Bath');
                        ?>
                    </div>  
                </div>

                <div id="Rreshti">
                    <div id="Produkti">
                        <?php 
                        $object = new ProductMapper();
                        $object->getProductByName('Feminelle Special Care');
                        ?>
                    </div>
                    <div id="Produkti">
                        <?php 
                        $object = new ProductMapper();
                        $object->getProductByName('Bubble Bath Sweetheart');
                        ?>
                    </div>
                    <div id="Produkti">
                        <?php 
                        $object = new ProductMapper();
                        $object->getProductByName('Body & Mind');
                        ?>
                    </div>  
                </div>
            </div>

            

            <div id="LipGloss">
                <h4>Lip Gloss</h4> 
                <div id="Rreshti">
                    <div id="Produkti">
                        <?php 
                            $object = new ProductMapper();
                            $object->getProductByName('Nude Lip Gloss');
                        ?>
                    </div>

                    <div id="Produkti">
                        <?php 
                            $object = new ProductMapper();
                            $object->getProductByName('Pink Lip Gloss');
                        ?>
                    </div>

                    <div id="Produkti">
                        <?php 
                            $object = new ProductMapper();
                            $object->getProductByName('Purple Lip Gloss');
                        ?>
                    </div>
                </div>
            </div>
       


            <div id="Lip">
                <h4>Lip </h4>
                <div id="Rreshti">
                    <div id="Produkti">
                        <?php 
                            $object = new ProductMapper();
                            $object->getProductByName('Open Pink Lip');
                        ?>
                    </div>

                    <div id="Produkti">
                        <?php 
                            $object = new ProductMapper();
                            $object->getProductByName('Pink Lip');
                        ?>
                    </div>

                    <div id="Produkti">
                        <?php 
                            $object = new ProductMapper();
                            $object->getProductByName('Nude Lip');
                        ?>
                    </div>
                </div>

                <div id="Rreshti">
                    <div id="Produkti">
                        <?php 
                            $object = new ProductMapper();
                            $object->getProductByName('Purple Lip');
                        ?>
                    </div>

                    <div id="Produkti">
                        <?php 
                            $object = new ProductMapper();
                            $object->getProductByName('Red Lip');
                        ?>
                    </div>

                    <div id="Produkti">
                        <?php 
                            $object = new ProductMapper();
                            $object->getProductByName('Nude Lipp');
                        ?>
                    </div>
                </div>
            </div>


            <div id="Foundation">
                <h4>Foundation</h4>
                <div id="Rreshti">
                    <div id="Produkti">
                        <?php 
                            $object = new ProductMapper();
                            $object->getProductByName('The One Foundation - Everlasting');
                        ?>
                    </div>

                    <div id="Produkti">
                        <?php 
                            $object = new ProductMapper();
                            $object->getProductByName('Matte Control Foundation');
                        ?>
                    </div>

                    <div id="Produkti">
                        <?php 
                            $object = new ProductMapper();
                            $object->getProductByName('The One Foundation - Everlasting Extreme');
                        ?>
                    </div>
                </div>

                <div id="Rreshti">
                    <div id="Produkti">
                        <?php 
                            $object = new ProductMapper();
                            $object->getProductByName('Illuskin Foundation and Concealer');
                        ?>
                    </div>

                    <div id="Produkti">
                        <?php 
                            $object = new ProductMapper();
                            $object->getProductByName('One Color Foundation');
                        ?>
                    </div>
                </div>
            </div>

            <div id="LashMascara">
                <h4>Lash Mascara </h4>
                <div id="Rreshti">
                    <div id="Produkti">
                        <?php 
                            $object = new ProductMapper();
                            $object->getProductByName('Waterproof Mascara');
                        ?>
                    </div>

                    <div id="Produkti">
                        <?php 
                            $object = new ProductMapper();
                            $object->getProductByName('FatLash Mascara');
                        ?>
                    </div>

                    <div id="Produkti">
                        <?php 
                            $object = new ProductMapper();
                            $object->getProductByName('Wonder Lash XXL');
                        ?>
                    </div>
                </div>

                <div id="Rreshti">
                    <div id="Produkti">
                        <?php 
                            $object = new ProductMapper();
                            $object->getProductByName('5-in-1 Wonder Lash Mascara');
                        ?>
                    </div>

                    <div id="Produkti">
                        <?php 
                            $object = new ProductMapper();
                            $object->getProductByName('Long Lash Mascara');
                        ?>
                    </div>

                    <div id="Produkti">
                        <?php 
                            $object = new ProductMapper();
                            $object->getProductByName('Wonder Lash Mascara');
                        ?>
                    </div>
                </div>

                <div id="Rreshti">
                    <div id="Produkti">
                        <?php 
                            $object = new ProductMapper();
                            $object->getProductByName('Double Effect Mascara');
                        ?>
                    </div>

                    <div id="Produkti">
                        <?php 
                            $object = new ProductMapper();
                            $object->getProductByName('Theme Douse Mascara');
                        ?>
                    </div>
                </div>
            </div>



            <div id="Parfume">
                <h4>Parfume</h4>
                <div id="Rreshti">
                    <div id="Produkti">
                        <?php 
                            $object = new ProductMapper();
                            $object->getProductByName('Macnetista');
                        ?>
                    </div>

                    <div id="Produkti">
                        <?php 
                            $object = new ProductMapper();
                            $object->getProductByName('Paradise');
                        ?>
                    </div>

                    <div id="Produkti">
                        <?php 
                            $object = new ProductMapper();
                            $object->getProductByName('Mysterial OUD');
                        ?>
                    </div>
                </div>

                <div id="Rreshti">
                    <div id="Produkti">
                        <?php 
                            $object = new ProductMapper();
                            $object->getProductByName('Infinita');
                        ?>
                    </div>

                    <div id="Produkti">
                        <?php 
                            $object = new ProductMapper();
                            $object->getProductByName('Amber Elixer');
                        ?>
                    </div>

                    <div id="Produkti">
                        <?php 
                            $object = new ProductMapper();
                            $object->getProductByName('Eclat Mon Parfum');
                        ?>
                    </div>
                </div>

                <div id="Rreshti">
                    <div id="Produkti">
                        <?php 
                            $object = new ProductMapper();
                            $object->getProductByName('Possess');
                        ?>
                    </div>
                </div>
            </div>


            <div id="Powder">
                <h4>Powder</h4>
                <div id="Rreshti">
                    <div id="Produkti">
                        <?php 
                            $object = new ProductMapper();
                            $object->getProductByName('ColourBox Face Powder 3');
                        ?>
                    </div>

                    <div id="Produkti">
                        <?php 
                            $object = new ProductMapper();
                            $object->getProductByName('Powder');
                        ?>
                    </div>

                    <div id="Produkti">
                        <?php 
                            $object = new ProductMapper();
                            $object->getProductByName('ColourBox Face Powder 1');
                        ?>
                    </div>
                </div>

                <div id="Rreshti">
                    <div id="Produkti">
                        <?php 
                            $object = new ProductMapper();
                            $object->getProductByName('Colour Powder');
                        ?>
                    </div>

                    <div id="Produkti">
                        <?php 
                            $object = new ProductMapper();
                            $object->getProductByName('Powder 2');
                        ?>
                    </div>

                    <div id="Produkti">
                        <?php 
                            $object = new ProductMapper();
                            $object->getProductByName('Colour Powder 1');
                        ?>
                    </div>
                </div>
            </div>

            <div id="Organic">
                <h4>Organic Products</h4>
                <div id="Rreshti">
                    <div id="Produkti">
                        <?php 
                            $object = new ProductMapper();
                            $object->getProductByName('Hydratin face cream - Normal Skin');
                        ?>
                    </div>

                    <div id="Produkti">
                        <?php 
                            $object = new ProductMapper();
                            $object->getProductByName('Nourishing face cream - Dry Skin');
                        ?>
                    </div>

                    <div id="Produkti">
                        <?php 
                            $object = new ProductMapper();
                            $object->getProductByName('Purifying face wash');
                        ?>
                    </div>
                </div>

                <div id="Rreshti">
                    <div id="Produkti">
                        <?php 
                            $object = new ProductMapper();
                            $object->getProductByName('Purifying Face Oil');
                        ?>
                    </div>

                    <div id="Produkti">
                        <?php 
                            $object = new ProductMapper();
                            $object->getProductByName('Cracked Heel Repair & Smooth');
                        ?>
                    </div>

                    <div id="Produkti">
                        <?php 
                            $object = new ProductMapper();
                            $object->getProductByName('Silk Baeuty - Hand Cream');
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