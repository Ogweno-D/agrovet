<!-- <?php
//   session_start();

//     $username=$_POST['username'];
//     $password=$_POST['password'];
//     $connect=mysqli_connect("localhost","root",'',"agrovet");
//     echo $username,$password;
//     if($connect)
//     {
//        $sql="select * from users where username='$username' and password='$password'";
//        $query=mysqli_query($connect,$sql);
//        if(mysqli_num_rows($query)==1)
//        {
//         $_SESSION['login']=$username;
//         echo "<script>alert('Login Successfull');</script>";
//         header("Location:index.php");
//        }
//        else
//        {
//         echo "<script>alert('Wrong username or password'); </script>";
//         header("Location:login.html");
//        }
//     }
//     else
//     {
//         echo "There was an error in connecting to the database";
//     }

?> -->
<?php

$is_invalid = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){

	$mysqli = require __DIR__ ."./db_logic.php";

	// TO COUNTERCHECK THE SUBMITTED LOGIN CREDENTIALS FROM THE DATABASE

	$sql = sprintf("SELECT * FROM users
				WHERE username ='%s'",
			$mysqli->real_escape_string($_POST["username"])
				);
	$result = $mysqli->query($sql);
	$user= $result ->fetch_assoc();


	if($user) {
	   if(password_verify($_POST["password"], $user["password"])){
		   session_start();
		   session_regenerate_id();

		   $_SESSION["user_id"] = $user["id"];
           echo "<script>alert('Login Successfull');</script>";
		   header("Location: index.php") ;
		   exit;
	   };
	}
	$is_invalid=true;
}


?>