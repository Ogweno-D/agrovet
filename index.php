<?php include_once "session.php"; ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"content="device-width, initial-scale=1.0">
        <title>Mutinda Agrovet</title>
        <link rel="stylesheet" href="style.css">
        <link href="https://fonts.googleapis.com/css2?
        family=poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
        <link rel="Stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>   
    <body>
        <div class="container">
<div class="navbar">
    <div class="logo">
        <img src="images/nice logo.png" width="180px">
    </div>
    <nav>
        <ul id="MenuItems">
            <li><a href="index.php"><i class="#"></i>Home</a></li>
            <li><a href="Compost.php"><i class="#"></i>Compost</a> </li>
            <li><a href="Soiltest.php"><i class="#"></i>Soil Test</a></li>
            <!--<li><a href="about.html"><i class="#"></i>About</a></li>--->
            <!--<li><a href="login.html"><i class="#"></i>login</a></li>--->
            <li><a href="contact us.php"><i class="#"></i>Contact Us</a></li>
            <li><a href="logoutCheck.php"><i class="#"></i>log out</a></li>
        </ul>
    </nav>  

    <img src="images/menu-icon.png" class="menu-icon" onclick="menutoggle()">
</div>
        </div>
         <!----<div class="text-box">
            <h1>KNOW YOUR FARMER <br>LOVE YOUR FOOD</h1>
            <a href="" class="hero-btn">Learn more about Membership</a>
        </div>
     </section>
    course------>
     <div class="course">
 <h1>Welcome to our Farm</h1>
 <h1>Pick your own Food</h1>
 <p>Enjoy the whole Farm experience by picking your own!To save disappoinment,we recommend <br>you 
     contact us to make sure its open before you come out.</p>
 <div class="row">
     <div class="course-col">
        <a href="Soiltest.php"><h3>Soil Test</h3>
         <p>You may have found the right fertilizer for your farm, but without the proper amount of fertilizer for treatments,
         your farm will not succeed.<br>The biggest factor in dermining your treatment is the size of your farm and the soil nutrient deficiencies.</p> </a>
     </div>
     <div class="course-col" >
        <a href="contact us.php"><h3>Consultation</h3>
         <p>We specialize in providing advice in all matters concerning compost manure and soil testing.<br>
             Our audince include individaul farmers, companies and organizations</p></a>
 
     </div>
     <div class="course-col">
        <a href="Compost.php"><h3>Compost</h3>
         <p>Yes, it is better to use compost instead of chemical fertilizers.<br>
             Compost is made out of natural or organic things like plant and 
             animals wastes which do not cause any pollution</p></a>
     </div>
 </div>
</div>
     <div class="farm">
         <h1>Our Farm</h1>
         <div class="row">
             <div class="farm-col">
                 <img src="images/crop nutrirtion.jpg" alt="">
                 <div class="layer">
 
                 </div>
 
             </div>
             <div class="farm-col">
                 <img src="images/consultation.jpg" alt="">
                 <div class="layer">
                     
                 </div>
 
             </div>
             <div class="farm-col">
                 <img src="images/images good.jpg" alt="">
                 <div class="layer">
                     
                 </div>
                 
 
             </div>
            </div> 
         </div>
 <!----------footer
 <div class="footer">
    <div class="container">
<div class="row">
    <div class="footer-col-1">
        <h3>Download Our APP</h3>
        <p>Download App for Android and ios mobile phone</p>
        <div class="app-logo">
            <img src="images/play-store.png">
            <img src="images/app-store.png">
        </div>
    </div>
    <div class="footer-col-2">
        <a href="index.html"><img src="images/nice logo.png" width="125px"></a>
        <p>Our Purpose Is To Make the Benefits of Better Farming Accessible to Many</p>
        <br>
        <div class="footer-col-3">
            <h3>follow us</h3>
            <li>Facebook</li>
            <li>Twitter</li>
            <li>Instagram</li>
            <li>Youtube</li>
        </div>
    </div>
</div>
        <hr>
        <p class="copyright">copyright 2022 - Mutinda Agrovet</p>
    </div>
</div>---->
  <!----------footer----->
  <footer class="footer-distributed" style="background-color:black" id="aboutUs">
    <center>
        <h1 style="font: 35px calibri;">About Us</h1>
    </center>
    <div class="footer-left">
        <h3 style="font-family: 'Times New Roman', cursive;">Mutinda Farmcare Agro &copy; </h3>
   <div class="logo">
            <a href="index.php"><img src="images/nice logo.png" width="200px"></a>
        </div>
        <br />
        <p style="font-size:20px;color:white">Your product Our market !!!</p>
        <br />
    </div>

    <div class="footer-center">
        <div>
            <i class="fa fa-map-marker"></i>
            <p style="font-size:20px">Mutinda Farmcare Agro<span>Nakuru</span></p>
        </div>
        <div>
            <i class="fa fa-phone"></i>
            <p style="font-size:20px">+254-795203449</p>
        </div>
        <div>
            <i class="fa fa-envelope"></i>
            <p style="font-size:20px"><a href="mailto:agroculture@gmail.com" style="color:white">mutinda@gmail.com</a></p>
        </div>
    </div>

    <div class="footer-right">
        <p class="footer-company-about" style="color:white">
            <span style="font-size:20px"><b>About Mutinda Farmcare Agro</b></span>
            Mutinda Farmcare Agro is e-commerce trading platform for soil testing, products & compost...
        </p>
        <div class="footer-icons">
            <a  href="#"><i style="margin-left: 0;margin-top:5px;"class="fa fa-facebook"></i></a>
            <a href="#"><i style="margin-left: 0;margin-top:5px" class="fa fa-instagram"></i></a>
            <a href="#"><i style="margin-left: 0;margin-top:5px" class="fa fa-youtube"></i></a>
        </div>
    </div>

</footer>
<!-----------js for toggle menu------>
<script>
var MenuItems = document.getElementById("MenuItems");

MenuItems.style.maxHeight= "0px";

function menutoggle(){
if(MenuItems.style.maxHeight == "0px")
{
    MenuItems.style.maxHeight = "200px";
}
else
{
    MenuItems.style.maxHeight = "0px";
}    
}
</script>

<!-----------js for toggle Form------>

</body>
</html>
    