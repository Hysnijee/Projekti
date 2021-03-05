<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oriflame</title>
    <link rel="stylesheet" href="../style/login.css">
</head>
<?php 
    include('../reusableCode/header.php');
?>
<div class="main">
            <div class="form">
                <h3>Login</h3><br>
                <div class="body">
                    <form>
                    <input  id="userN" type="text" placeholder="Username...">
                    <input type="password" id="pass" name="pass" placeholder="Password..." minlength="8">
                    <input  id="rememberme" type="checkbox">
                    <label  for="rememberme">Remember me</label><br>
                    <p id="pFTG"> Or login with</p>
                    <div class="FTG">
                        <a href="https://www.facebook.com/"><img id="ftg1" src="../images/facebookLogo.png"></a>
                        <a href="https://twitter.com/login?lang=en-gb"><img id="ftg2" src="../images/TwitterLogo.PNG"></a>
                        <a href="https://accounts.google.com/ServiceLogin/signinchooser?flowName=GlifWebSignIn&flowEntry=ServiceLogin"><img id="ftg3" src="../images/GoogleLogo.png"></a>
                    </div>
                    <input  id="login" type="submit" value="Login"><br><br>
                    </form>
                    <p id="pR">Don't have an account?<a href="../views/register.php" id="registerlink">Sign up</a></p>
                </div>
            </div>  
</div>
<?php 
    include('../reusableCode/footer.php');
?>      
</body>
</html>