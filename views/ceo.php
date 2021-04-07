<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ceo</title>
    <link rel="stylesheet"  href="../style/ceo.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
</head>
<body class="main">
    <div id="ceoAlbiona">
    <div class="card">
        <img src="../images/ceoAlbiona.PNG" alt="Albiona" style="width:100%">
        <h1>Albiona Berisha</h1>
        <p class="title">CEO & Founder</p>
        <p>UBT University</p>
        <div style="margin: 24px 0;">
            <a href="https://www.instagram.com/albionaberish/"><i class="fa fa-instagram"></i></a> 
            <a href="https://twitter.com/albionaberish"><i class="fa fa-twitter"></i></a>  
            <a href="#"><i class="fa fa-linkedin"></i></a>  
            <a href="https://www.facebook.com/albiona.berisha.547/"><i class="fa fa-facebook"></i></a> 
        </div>
        <p><button type="button" class="collapsible">Contact</button></p>
        <div class="content">
            <p>+38345123456</p>
        </div>
    </div>
    </div>

    <div id="ceoHysnija">
        <div class="card">
            <img src="../images/ceoHysnije.PNG" alt="Hysnije" style="width:100%">
            <h1>Hysnije Zllanoga</h1>
            <p class="title">CEO & Founder</p>
            <p>UBT University</p>
            <div style="margin: 24px 0;">
                <a href="https://www.instagram.com/hysnije_z/"><i class="fa fa-instagram"></i></a> 
                <a href="https://twitter.com/HysnijeZ"><i class="fa fa-twitter"></i></a>  
                <a href="#"><i class="fa fa-linkedin"></i></a>  
                <a href="https://www.facebook.com/hysnije.zllanoga.7"><i class="fa fa-facebook"></i></a> 
            </div>
            <p><button type="button" class="collapsible">Contact</button></p>
            <div class="content">
                <p>+38349123456</p>
            </div>
        </div>
        </div>

        <script>
            var coll = document.getElementsByClassName("collapsible");
            var i;
            
            for (i = 0; i < coll.length; i++) {
              coll[i].addEventListener("click", function() {
                this.classList.toggle("active");
                var content = this.nextElementSibling;
                if (content.style.display == "block") {
                  content.style.display = "none";
                } else {
                  content.style.display = "block";
                }
              });
            }
        </script>
</body>
</html>