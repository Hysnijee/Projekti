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
                <li>Morbi libero ligula, molestie id pulvinar tempus, efficitur vitae ante. 
                Integer at leo tincidunt, ultricies nibh vitae, mollis ex. Cras lorem leo, 
                ullamcorper vitae nunc id, consectetur laoreet velit. 
                Vivamus venenatis, ligula vitae consequat accumsan, purus justo varius mi, vitae dapibus neque lorem vitae turpis. 
                Fusce finibus metus massa, quis efficitur ligula ultricies at. 
                Aenean mi mauris, lacinia in venenatis nec, venenatis non nunc. 
                Nam vel ipsum ac quam congue gravida. Nunc at est quis velit efficitur vestibulum. 
                Cras molestie efficitur mauris, in varius tellus vehicula ut. 
                Praesent molestie risus id neque mollis, et posuere lectus condimentum. 
                Cras vitae nisi in ligula tempus faucibus ut commodo massa. </li>
                <li><img src="../images/ceo.jpg"></li>
            </ul>
        </div>
        <div class="box2">
            <form>
                <label>Email</label>
                <input type="text" placeholder="Enter a valid email address">
                <label>Name</label>
                <input type="text" placeholder="Enter your name">
                <label>Address</label>
                <input type="text" placeholder="Enter your address">
                <label>Message</label>
                <input type="text" placeholder="Enter your message">
                <input type="submit" value="Submit" id="submit">
            </form>
        </div>
    </div>
    <?php 
        include('../reusableCode/footer.php');
    ?>
    </body>
</html>