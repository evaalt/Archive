<?php
session_start();
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
//    header("location: welcome.php");
    exit;
}
require_once "conn.php";

$email = $_POST["email"];
$password = $_POST["password"];
$email_err = $password_err = "";

 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // // Check if username is empty
    // if(empty(trim($_POST["email"]))){
    //     $email_err = "Please enter email.";
    // } else{
    //     $email = trim($_POST["email"]);
    // }
    
    // // Check if password is empty
    // if(empty(trim($_POST["password"]))){
    //     $password_err = "Please enter your password.";
    // } else{
    //     $password = trim($_POST["password"]);
    // }
    
    // Validate credentials
    if(empty($email_err) && empty($password_err)){
        // Prepare a select statement
        $sql = "SELECT id, email, password FROM user_data WHERE email = ?";
        
        if($stmt = $mysqli->prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $param_email = $email;
            $stmt->bind_param("s", $param_email);
            
            // Set parameters
            
            
            // Attempt to execute the prepared statement
            if($stmt->execute()){
                // Store result
                $stmt->store_result();
                
            
                // Check if username exists, if yes then verify password
                if($stmt->num_rows >= 1){                    
                    // Bind result variables
                    $stmt->bind_result($id, $email, $hashed_password);
                   
                    if($stmt->fetch()){
                        
                        if(password_verify($password, $hashed_password)){
                            // Password is correct, so start a new session
                            session_start();
                            
                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["email"] = $email;     
                            
                            // Redirect user to welcome page
                            header("location: welcome.php");
                        } else{
                            // Display an error message if password is not valid
                            
                            $password_err = header("location: index.php");
                        }
                    }
                } else{
                    // Display an error message if username doesn't exist
                    $email_err = header("location: index.php");
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
        
        // Close statement
      
    }
    
    // Close connection
    $mysqli->close();
}
?>
 
