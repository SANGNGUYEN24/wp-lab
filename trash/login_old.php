<?php
// Connect to the user database
require_once("user_database.php");

// Define variables and initialize with empty values
$username = $password = "";
$username_err = $password_err = "";

// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Validate username
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter a username.";
    }elseif(!preg_match('/^[a-zA-Z0-9_]+$/', trim($_POST["username"]))){
        $username_err = "User name can only contains letters, numbers, and underscores.";
    }else{
        // Prepare a select statement
        $sql = "SELECT user_id FROM user WHERE username = ?";
        if ($stmt = $mysqli->prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt->bind_param("s", $param_username);

            // Set parameters
            $param_username = trim($_POST["username"]);

            // Attempt to execute the prepared statement
            if($stmt->execute()){
                // Store result
                $stmt->store_result();

                if($stmt->num_rows() == 1){
                    $username_err = "This username is already taken.";
                }else{
                    $username = trim($_POST["username"]);
                }
            }else{
                echo "Something went wrong. Please try again.";
            }

            // Close statement
            $stmt->close();
        }
    }

    // Validate password
    if (empty(trim($_POST["username"]))){
        $password_err = "Please enter a password.";
    }elseif(strlen(trim($_POST["username"])) < 6){
        $password_err = "Password must have at least 6 characters.";
    }else{
        $password = trim($_POST["password"]);
    }

    // Check input errors before inserting in database
    if(empty($username_err) && empty($password_err)){
        // Prepare an insert statement
        $sql = "INSERT INTO user (username, password) VALUES (?,?)";

        if ($stmt = $mysql->prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt->bind_param("ss", $param_username, $param_password);

            // Set parameters
            $param_username = $username;
            // Create password hash
            $param_password = password_hash($password, PASSWORD_DEFAULT);

            // Attempt to execute the preprared statement
            if ($stmt->execute()){
                // Redirect to login page
                header("location: login.php");
            }
        }
    }
}

?>
<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
	<title>Login</title>
	<link rel="stylesheet" href="css/form.css">
    </head>
<h1 class = "h1">Login page</h1>
<body>
    <div class="form-holder">
		<form action="">
			<input type="text" placeholder="User name">
			<input type="password" placeholder="Password">
            <div class="pass"><a href="#">Forgot password?</a></div>    
			<button type="submit" id= "login">Log in</button>
		</form>
	</div>
</body>
</html>
 