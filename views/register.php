<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oriflame</title>
    <link rel="stylesheet" href="../style/register.css">
</head>
<?php 
    include('../reusableCode/header.php');
?>
<div class="main">
    <form method="post" onsubmit="return valdimiIFormes()">        
        <label>Full Name</label>
        <input type="text" placeholder="Enter your firstname and lastname">
        <label>Email</label>
        <input type="text" placeholder="Enter a valid email address">
        <label>Username</label>
        <input type="text" placeholder="Enter a username">
        <label>Password</label>
        <input type="password" placeholder="***********">
        <label>City</label>
        <input type="text" placeholder="Enter your city">
        <label>Address</label>
        <input type="text" placeholder="Enter a valid address">
        <label>Credit Card</label>
        <select>
            <option>PayPal</option>
            <option>Visa</option>
            <option>Mastercard</option>
        </select>
        <label>Credit Card number</label>
        <input type="text" placeholder="Enter a valid credit card number">
        <input type="submit" id="submit" value="Register">
    </form>
</div>
<?php 
    include('../reusableCode/footer.php');
?>      
<script src="../js/register.js"></script>
</body>
</html>