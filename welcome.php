<?php  
session_start();  
  
if(!$_SESSION['email'])  
{  
  
    header("Location: login.html");//redirect to the login page to secure the welcome page without login access.  
}  
  
?>  
  
<html>  
<head>  
  
    <title>  
        Registration  
    </title>  
</head>  
  
<body>  
<h1>Welcome</h1><br>  
<?php  
echo $_SESSION['email'];  
?>  
<h1><a href="logoutCheck.php">Logout here</a> </h1>  
</body>  
  
</html>  