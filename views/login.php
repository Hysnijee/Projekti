<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oriflame</title>
    <link rel="stylesheet" href="../style/login.css">
</head>
<body>
<div class="main">
            <div class="form">
                <h3>Login</h3><br>
                <div class="body">
                    <form action="../components/loginVerify.php" method="post" onsubmit="return ValidimiLogin()">
                    <input  id="username" type="text" name="username" placeholder="Username...">
                    <input type="password" id="password" name="password" placeholder="********" minlength="8">
                    <p id="pFTG"> Or login with</p>
                    <div class="FTG">
                        <a href="https://www.facebook.com/"><img id="ftg1" src="../images/facebookLogo.png"></a>
                        <a href="https://twitter.com/login?lang=en-gb"><img id="ftg2" src="../images/TwitterLogo.PNG"></a>
                        <a href="https://accounts.google.com/ServiceLogin/signinchooser?flowName=GlifWebSignIn&flowEntry=ServiceLogin"><img id="ftg3" src="../images/GoogleLogo.png"></a>
                    </div>
                    <input  id="login" type="submit" value="Login" name='loginbtn'><br><br>
                    </form>
                    <p id="pR">Don't have an account?<a href="../views/register.php" id="registerlink">Sign up</a></p>
                </div>
            </div>  
</div>
<script src="../js/login.js"></script>    
</body>
</html>