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

    $is_insert = $db->query("INSERT INTO `contact us`( `name`, `phone`, `email`, `subject`, `message`) VALUES ('$name',' $phone','$email','$subject','$message')");
    
    if($is_insert = true){
        echo "<h2>Your Request is Submited .</h2>";
        exit();
    }

}

?>