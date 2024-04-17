<?php
    $username=$_POST['username'];
    $password=$_POST['password'];
    $email=$_POST['email'];
    $connect=mysqli_connect("localhost","root",'',"agrovet");
    echo $username,$password,$email;
    if($connect)
    {
       $sql="insert into users(username,password,email) values('$username','$password','$email')";
       $query=mysqli_query($connect,$sql);
       if($query)
       {
        echo "<script>alert('Registration Successfull')</script>";
        header("location:login.html");
       }
    }
    else
    {
        echo "There was an error in connecting to the database";
    }



?>