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
    <link rel="stylesheet" href="../style/register.css">
</head>
<body>
<div class="main">
    <form action="../components/registerVerify.php" method="post" onsubmit="return valdimiIFormes()">        
        <label>Name</label>
        <input name='register-name' type="text" placeholder="Enter your firstname">
        <label>Last Name</label>
        <input name='register-lastname' type="text" placeholder="Enter your lastname">
        <label>Email</label>
        <input name='register-email' type="text" placeholder="Enter a valid email address">
        <label>Username</label>
        <input name='register-username' type="text" placeholder="Enter a username">
        <label>Password</label>
        <input name='register-pass' type="password" placeholder="***********">
        <label>City</label>
        <input name='register-city' type="text" placeholder="Enter your city">
        <label>Address</label>
        <input name='register-add' type="text" placeholder="Enter a valid address">
        <label>Credit Card</label>
        <select>
            <option>PayPal</option>
            <option>Visa</option>
            <option>Mastercard</option>
        </select>
        <label>Credit Card number</label>
        <input name='register-ccNo' type="text" placeholder="Enter a valid credit card number">
        <input type="submit" id="submit" value="Register" name='register-btn'>
    </form>
</div>     
<script src="../js/register.js"></script>
</body>
</html>