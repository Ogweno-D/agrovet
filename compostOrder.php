<?php
use FFI\Exception;
try {
    
    $db = new mysqli("localhost","root","","mutindafarmcare");
} catch (Exception $exc) {  
    echo $exc->getTraceAsString();

}
if(isset($_POST['name']) && isset($_POST['phone']) && isset($_POST['county']) && isset($_POST['subcounty']) && isset($_POST['location']) && isset($_POST['farmsize'])){
    
    $name=$_POST['name'];
    $phone=$_POST['phone'];
    $county=$_POST['county'];
    $subcounty=$_POST['subcounty'];
    $location=$_POST['location'];
    $farmsize=$_POST['farmsize'];

    $is_insert = $db->query("INSERT INTO `compost`( `name`, `phone`, `county`, `subcounty`, `location`, `farmsize`) VALUES ('$name',' $phone','$county','$subcounty','$location','$farmsize')");
    
    if($is_insert = true){
        echo "<h2>Your Order is Submited .</h2>";
        exit();
    }

}

?>