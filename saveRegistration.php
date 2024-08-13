<?php
    mysqli_report(MYSQLI_REPORT_OFF);
    $isRegistrationSuccessful = false;
    $errorMsg = '';

    if (empty($_POST["username"])){
        $errorMsg = "Your username is required";
    }

    if(! filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){
        $errorMsg = "Valid email is required";
    }
    if (!empty($errorMsg)) {
    // Output error message if validation fails
    echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Error!</strong> ' . $errorMsg . '
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
    exit;
}

    $password_hash = password_hash($_POST["password"], PASSWORD_DEFAULT);
    $mysqli= require __DIR__ ."./db_logic.php";

    // Prepare SQL to check if email exists
    $checkEmailSql = "SELECT id FROM users WHERE email = ?";
    $stmt = $mysqli->stmt_init();

    if (!$stmt = $mysqli->prepare($checkEmailSql)) {
        die("SQL Error: " . $mysqli->error);
    }

    // Bind email parameter and execute
    $stmt->bind_param("s", $_POST["email"]);
    $stmt->execute();
    $stmt->store_result();

    // Check if email exists
    if ($stmt->num_rows > 0) {
        // Email already exists, inform the user
        echo "<script type='text/javascript'>
            alert('Email already taken. Please use a different email.');
            window.location.href = 'login.html';
        </script>";
        $stmt->close();
        exit;
    }

    // Close the statement for email check
    $stmt->close();

    $sql = "INSERT INTO users ( username, email, password) VALUES (?, ?, ?)";
    $stmt = $mysqli->stmt_init();

   if(!$stmt = $mysqli->prepare($sql)){
        die("SQL Error :". $mysqli->error);
   }
        // Bind parameters to the placeholders
     $stmt->bind_param("sss", $_POST["username"] ,$_POST["email"] , $password_hash );

        // Execute the statement
        if ($stmt->execute()) {
            $isRegistrationSuccessful = true;
        } else {
            if($mysqli->errno === 1062){
                die("Email already taken:");
               } else{
                die($mysqli->error." " .$mysqli->errno);
                }
        }
    
    // Close the statement
    $stmt->close();
    
    if ($isRegistrationSuccessful) {
        echo "<script type='text/javascript'>
            alert('Registration successful! You can now Login!');
            window.location.href = 'login.html';
            </script>";
    } else {
        // Handle login failure
        echo "<script type='text/javascript'>
         alert('Registration failed! Please try again.');
         window.locationi.href = 'login.html';
            </script>";
    }

?>