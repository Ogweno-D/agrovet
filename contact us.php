<?php require_once "session.php"; ?>
<?php
use FFI\Exception;
try {
    $db = new mysqli("localhost","root","","agrovet");
} catch (Exception $exc) {  
    echo $exc->getTraceAsString();

}
if(isset($_POST['name']) && isset($_POST['phone']) && isset($_POST['email']) && isset($_POST['subject']) && isset($_POST['message'])){
    
    $name=$_POST['name'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $subject=$_POST['subject'];
    $message=$_POST['message'];

    $is_insert = $db->query("INSERT INTO `contacts`( `name`, `phone`, `email`, `subject`, `message`) VALUES ('$name',' $phone','$email','$subject','$message')");
    
    if($is_insert = true){
        echo "<h2>Your Request is Submited .</h2>";
        header("Location:index.php");
        exit();
    }

}

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="device-width, initial-scale=1.0">
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
                        <li><a href="logoutCheck.php"><i class="#"></i>Log Out</a></li>
                    </ul>
                </nav>  
               
                <img src="images/menu-icon.png" class="menu-icon" onclick="menutoggle()">
            </div>
        </div>

        <!----------account-page------->
      <div class="container">
        <h1>Connect With Us</h1>
        <P>We would love to respond to your queries and help you succeed. feel free to get in touch with us.</P>
        <div class="contact-box">
            <div class="contact-left">
        <h3>Sent your request</h3>
        <form action="contact us.php" method="POST">
            <div class="input-row">
                <div class="input-group">
                    <label>Name</label>
                    <input type="text" name="name" placeholder="Billy Adams">
                </div>
                <div class="input-group">
                    <label>Phone</label>
                    <input type="text" name ="phone" placeholder="+254-700 000 000">
                </div>
            </div>
            <div class="input-row">
                <div class="input-group">
                    <label>Email</label>
                    <input type="email" name ="email" placeholder="billyadams@gmail.com">
                </div>
                <div class="input-group">
                    <label>Subject</label>
                    <input type="text" name ="subject" placeholder="consultation">
                </div>
            </div>

            <label>Message</label>
            <textarea row="5" name ="message" placeholder="Your Message"></textarea>

            <button type="submit">SEND</button>
        </form>
        </div>
            <div class="contact-left">
                <h3>Reach Us</h3>
                <table>
                    <tr>
                        <td>Email</td>
                        <td>contactus@example.com</td>
                    </tr>
                    <tr>
                        <td>Phone</td>
                        <td>+254-700 000 000</td>
                    </tr>
                    <tr>
                        <td>Address</td>
                        <td>#21212, Ground floor, 7th cross<br>
                        Nakuru city, Highway Road, Nakuru<br>
                        Nakuru, 015
                    </td>
                    </tr>
                </table>
            </div>
        </div>
      </div>
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
    };
</script>

<!-----------js for toggle Form------>

<script>

    var LoginForm = document.getElementById("LoginForm");
    var RegForm = document.getElementById("RegForm");
    var Indicator = document.getElementById("Indicator");

    function register(){

        RegForm.style.transform = "translateX(0px)";
        LoginForm.style.transform = "translateX(0px)";
        Indicator.style.transform = "translateX(100px)";
    }

    function login(){
        
        RegForm.style.transform = "translateX(300px)";
        LoginForm.style.transform = "translateX(300px)";
        Indicator.style.transform = "translateX(0px)";
    }

</script>

</body>
</html>