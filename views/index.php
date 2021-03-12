<?php 
    include_once '../components/article.php';
    require_once '../components/articleMapper.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oriflame</title>
    <link rel="stylesheet" href="../style/style.css">
</head>
    <?php
        include('../reusableCode/header.php');
    ?>
    <div class="main">
        <div class="first-main">
            <ul>
                <li id="first-li"><img src="../images/prod1.jpg"></li>
                <li id="second-li"><img src="../images/prod2.jpg"><div id="concept">ACCESORIES</div></li>
                <li id="third-li"><img src="../images/prod3.jpg"></li>
                <li id="fourth-li">
                    <h1>Një kompani e bukurisë si asnjë tjetër</h1>
                    <?php 
                        $object = new ArticleMapper();
                        $object->getDescriptionByType('first-paragraph');
                    ?>
                </li>
            </ul>
        </div>
        <div class="second-main">
            <ul>
                <li><img src="../images/prod16.jpg"></li>
                <li><img src="../images/prod17.jpg"></li>
                <li><img src="../images/prod7.jpg"></li>
                <li><img src="../images/prod8.jpg"></li>
                <li><img src="../images/prod9.jpg"></li>
                <li><img src="../images/prod10.jpg"></li>
                <li><img src="../images/prod13.jpg"></li>
                <li><img src="../images/prod15.jpg"></li>
                <li><img src="../images/prod11.jpg"></li>
                <li><img src="../images/prod9.jpg"></li>
                <li><img src="../images/prod14.jpg"></li>
            </ul>
        </div>
        <div class="third-main">
            <div class="box">
                <div class="inner-box-first">
                    <img src="../images/oriflameLogo.png">
                </div> 
                <div class="inner-box-second">
                    <hr>
                    <p>Choose your</p><br>
                    <div id="concept2">COSMETICS</div>
                </div>
                <div class="inner-box-third">
                    <?php
                        $object = new ArticleMapper();
                        $object->getDescriptionByType('second-paragraph');
                    ?>
                </div>
            </div>
        </div>
        <div class="fourth-main">
            <div class="f1">
                <h1>01<h1>
            </div>
            <div class="f2">
                    <?php
                        $object = new ArticleMapper();
                        $object->getDescriptionByType('cosmetic');
                    ?>
                <a href="Cosmetic.php"><input type="submit" value="learn more" id ='button'></a>
            </div>
        </div>
        <div class="slider">
                <button class="slide-button slide-left" onclick="levizja1(-1)">&#10094;</button> <!--&#10094 ne unicode shigjeta-->
                <img class="slide slide1" src="../images/prod18.jpg">
                <img class="slide slide1" src="../images/prod19.jpg">
                <img class="slide slide1" src="../images/prod20.jpg">
                <button class="slide-button slide-right" onclick="levizja1(+1)">&#10095;</button>  
        </div>
        <div class="fifth-main">
            <div class="f2">
                    <?php
                        $object = new ArticleMapper();
                        $object->getDescriptionByType('accesories');
                    ?>
                <a href="accessories.php"><input type="submit" value="learn more" id ='button'></a>
            </div>
            <div class="f1">
                <h1>02<h1>
            </div>
        </div>
        <div class="slider">
                <button class="slide-button slide-left" onclick="levizja2(-1)">&#10094;</button> <!--&#10094 ne unicode shigjeta-->
                <img class="slide slide2" src="../images/skincare2.jpg">
                <img class="slide slide2" src="../images/skincare3.jpg">
                <img class="slide slide2" src="../images/skincare1.jpg">
                <button class="slide-button slide-right" onclick="levizja2(+1)">&#10095;</button> 
                <h1 id="h1-skincare">Skincare</h1> 
        </div>
        <div class="sixth-main">
        <div class="f1">
            <h1>03<h1>
            </div>
            <div class="f2">
                    <?php
                        $object = new ArticleMapper();
                        $object->getDescriptionByType('skincare');
                    ?>
                <a href="skincare.php"><input type="submit" value="learn more" id ='button'></a>
            </div>
        </div>
    </div>
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

        slider2(slideIndex);
        
        function levizja2(n) {  //poziten e fotove, pranon nje parameter n, nalt e kemi bo(+1) edhe (-1)
           slider2(slideIndex = slideIndex+n);
        }

        function slider2(n) {
            var fotot = document.getElementsByClassName("slide2");
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