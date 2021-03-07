<?php 
    session_start();
    include_once '../components/connection.php';
    $query = "select * from skincareproducts where category='pastrues';";
    $result = mysqli_query($conn, $query);
    $query2 = "select * from skincareproducts where category='ushqyes';";
    $result2 = mysqli_query($conn, $query2);
    $query3 = "select * from skincareproducts where category='hidratues';";
    $result3 = mysqli_query($conn, $query3);
    $query4 = "select * from skincareproducts where category='serume';";
    $result4 = mysqli_query($conn, $query4);
    $query5 = "select * from skincareproducts where category='maska';";
    $result5 = mysqli_query($conn, $query5);
    $query6 = "select * from skincareproducts where category='kunderDiellit';";
    $result6 = mysqli_query($conn, $query6);

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
            <li class="li1"><a href="insertProduct.php">Insert Product</a></li>
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
        <?php 
            while($rows = mysqli_fetch_assoc($result)){
        ?>
        <ul class="main-ul">
            <li><img src="<?php echo $rows['img_path']?>"><br><?php echo $rows['name']?><br><div class="cmimi"><?php echo $rows['price']?>€</div></li>
        </ul>
        <?php
        }
        ?>
    </div>
    <div class="second-main" id="second-main">
    <p>Hidratues</p>
        <?php 
            while($rows = mysqli_fetch_assoc($result3)){
        ?>
        <ul class="main-ul">
            <li><img src="<?php echo $rows['img_path']?>"><br><?php echo $rows['name']?><br><div class="cmimi"><?php echo $rows['price']?>€</div></li>
        </ul>
        <?php
        }
        ?>
    </div>
    <div class="third-main" id="third-main">
    <p>Serume dhe Tretmane</p>
        <?php 
            while($rows = mysqli_fetch_assoc($result4)){
        ?>
        <ul class="main-ul">
            <li><img src="<?php echo $rows['img_path']?>"><br><?php echo $rows['name']?><br><div class="cmimi"><?php echo $rows['price']?>€</div></li>
        </ul>
        <?php
        }
        ?>
    </div>
    <div class="fourth-main" id="fourth-main">
    <p>Maska</p>
        <?php 
            while($rows = mysqli_fetch_assoc($result5)){
        ?>
        <ul class="main-ul">
            <li><img src="<?php echo $rows['img_path']?>"><br><?php echo $rows['name']?><br><div class="cmimi"><?php echo $rows['price']?>€</div></li>
        </ul>
        <?php
        }
        ?>
    </div>
    <div class="fifth-main" id="fifth-main">
    <p>Kujdesi ndaj diellit</p>
        <?php 
            while($rows = mysqli_fetch_assoc($result6)){
        ?>
        <ul class="main-ul">
            <li><img src="<?php echo $rows['img_path']?>"><br><?php echo $rows['name']?><br><div class="cmimi"><?php echo $rows['price']?>€</div></li>
        </ul>
        <?php
        }
        ?>
    </div>
    <div class="sixth-main" id="sixth-main">
    <p>Ushqyes</p>
    <?php 
        while($rows = mysqli_fetch_assoc($result2)){
    ?>
    <ul class="main-ul">
        <li><img src="<?php echo $rows['img_path']?>"><br><?php echo $rows['name']?><br><div class="cmimi"><?php echo $rows['price']?>€</div></li>
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