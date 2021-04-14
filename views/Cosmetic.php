<?php
    session_start();
    include_once '../components/product.php';
    require_once '../components/productMapper.php';
    $mapper = new ProductMapper();
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
                <?php 
                    if(isset($_SESSION['role']) && $_SESSION['role'] == '1'){
                ?>
                    <li><a href="insertProduct.php"><input type="submit" id='insertProd' name='insert' value="Insert a Product"></a></li>
                <?php 
                    }
                ?>
                </ul>
                
                <div class="slider">
                <button class="slide-button slide-left" onclick="levizja1(-1)">&#10094;</button> <!--&#10094 ne unicode shigjeta-->
                <img class="slide slide1" src="../images/photo1.jpg">
                <img class="slide slide1" src="../images/photo2.jpg">
                <img class="slide slide1" src="../images/photo3.jpg">
                <button class="slide-button slide-right" onclick="levizja1(+1)">&#10095;</button>
                </div>   
            </div>
            
            <h4>Bath & Body</h4>
            <div id="BathBody">
                <?php
                    $products = $mapper->getProductsByLowerCategory('Bath & Body');
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
            <h4>Lip Gloss</h4> 
            <div id="LipGloss">
                <?php
                    $products = $mapper->getProductsByLowerCategory('Lip Gloss');
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
            <h4>Lip </h4>
            <div id="Lip">
                <?php
                    $products = $mapper->getProductsByLowerCategory('Lip');
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
            <h4>Foundation</h4>
            <div id="Foundation">
                <?php
                    $products = $mapper->getProductsByLowerCategory('Foundation');
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
            <h4>Lash Mascara </h4>
            <div id="LashMascara">
                <?php
                    $products = $mapper->getProductsByLowerCategory('Lash Mascara');
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
            <h4>Parfume</h4>
            <div id="Parfume">
                <?php
                    $products = $mapper->getProductsByLowerCategory('Parfume');
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
            <h4>Powder</h4>
            <div id="Powder">
                <?php
                    $products = $mapper->getProductsByLowerCategory('Powder');
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
            <h4>Organic Products</h4>
            <div id="Organic">
                <?php
                    $products = $mapper->getProductsByLowerCategory('Organic Products');
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
        </main>
        <?php 
        include('../reusableCode/footer.php');
        ?>
    <script>
        var slideIndex = 1;//pozitat e fotove
        slider1(slideIndex);
        
        function levizja1(n) {  //poziten e fotove, pranon nje parameter n, nalt e kemi bo(+1) edhe (-1)
           slider1(slideIndex = slideIndex+n);
        }
        function slider1(n) {
            var fotot = document.getElementsByClassName("slide1");
            if (n >fotot.length) {
                slideIndex = 1
            }
            if (n < 1) {
                slideIndex = fotot.length
            } ;
            for (i = 0; i < fotot.length; i++) {
                fotot[i].style.display = "none";
            }
            fotot[slideIndex-1].style.display = "block";
        }
    </script>
    </body>
</html>