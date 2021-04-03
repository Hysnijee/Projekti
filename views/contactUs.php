<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oriflame</title>
    <link rel="stylesheet" href="../style/contactUs.css">
</head>
    <?php
        include('../reusableCode/header.php');
    ?>
    <div class="main">
        <div class="box1">
            <ul>
                <li><h1>00</h1></li>
                <li>Ne ju inkurajojmë të kontaktoni nëse nuk keni gjetur përgjigjet që keni 
                    kërkuar këtu në Shërbimin e Klientit të Oriflame. 
                    Ne e vlerësojmë opinionin tuaj, dhe presim për të dëgjuar nga ju.
                    Ju lutem plotësojeni formën e dhënë nëse dëshironi të na shkruani email.</li>
                <li><img src="../images/ceo.jpg"></li>
            </ul>
        </div>
        <div class="box2">
            <form method="post" onsubmit="return validimIKontaktFormes()">
                <label>Email</label>
                <input type="text" placeholder="Enter a valid email address">
                <label>Name</label>
                <input type="text" placeholder="Enter your name">
                <label>Address</label>
                <input type="text" placeholder="Enter your address">
                <label>Message</label>
                <input type="text" placeholder="Enter your message">
                <input type="submit" value="Submit" id="submit" name='contact-submit'>
            </form>
        </div>
    </div>
    <?php 
        include('../reusableCode/footer.php');
    ?>
    <script src="../js/contactUs.js"></script>
    </body>
</html>