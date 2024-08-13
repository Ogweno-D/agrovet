<?php
session_start();

    $username=$_POST['username'];
    $password=$_POST['password'];
    $connect=mysqli_connect("localhost","root",'',"agrovet");
    echo $username,$password;
    if($connect)
    {
        


       $sql="select * from users where username='$username' and password='$password'";
       $query=mysqli_query($connect,$sql);
       if(mysqli_num_rows($query)==1)
       {
        $_SESSION['login']=$username;
        echo "<script>alert('Login Successfull');</script>";
        header("location:index.php");
       }
       else
       {
        ?>
<script>alert("Wrong username or password"); </script>
        <?php
        header("location:login.html");
       }
    }
    else
    {
        echo "There was an error in connecting to the database";
    }

?>