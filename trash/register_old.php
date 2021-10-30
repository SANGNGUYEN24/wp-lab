<?php
// Connect to the user database
require_once("./user_database.php");

// Define variables and initialize with empty values

$fullname = $username = $password = "";
$fullname_err = $username_err = $password_err = "";

// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Validate full name
    if (empty($fullname)){
        $fullname_err = "Please enter a fullname.";
    }

    // Validate username
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter a username.";
    }elseif(!preg_match('/^[a-zA-Z0-9_]+$/', trim($_POST["username"]))){
        $username_err = "User name can only contains letters, numbers, and underscores.";
    }else{
        // Prepare a select statement
        $sql = "SELECT user_id FROM user WHERE username = ?";
        if ($stmt = $conn->prepare($sql)){
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
    if (empty(trim($_POST["password"]))){
        $password_err = "Please enter a password.";
    }elseif(strlen(trim($_POST["password"])) < 6){
        $password_err = "Password must have at least 6 characters.";
    }else{
        $password = trim($_POST["password"]);
    }

    // Check input errors before inserting in database
    if(empty($fullname_err) && empty($username_err) && empty($password_err)){
        // Prepare an insert statement
        $sql = "INSERT INTO user(name, username, password) VALUES (?,?,?)";

        if ($stmt = $conn->prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt->bind_param("sss",$param_fullname, $param_username, $param_password);

            // Set parameters
            $param_fullname = $fullname;
            $param_username = $username;
            // Create password hash
            $param_password = password_hash($password, PASSWORD_DEFAULT);

            // Attempt to execute the preprared statement
            if ($stmt->execute()){
                echo "Insert ok";
                // Redirect to login page
                header("Location: login.php");
            }else{
                echo "Something went wrong. Please try again.";
            }
            // Close statement
            $stmt->close();
        }
    }
    $conn->close();
}

?>
<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
	<title>Register page</title>
	<link rel="stylesheet" href="css/form.css">
    </head>
<h1 class = "h1">Register page</h1>
<body>
    <div class="form-holder">
		<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method = "post">
		<input type="text" placeholder="Your full name"<?php 
            echo (!empty($fullname_err))? 'is-valid': '';
            ?>
            value = "<?php echo $fullname;?>"
            >
            <span class="invalid-feedback"><?php echo $fullname_err; ?></span>
	
        <input type="text" placeholder="User name" 
            <?php 
            echo (!empty($username_err))? 'is-valid': '';
            ?>
            value = "<?php echo $username;?>"
            >
            <span class="invalid-feedback"><?php echo $username_err; ?></span>

			<input type="password" placeholder="Password"
            <?php 
            echo (!empty($password_err))? 'is-valid':'';
            ?>
            value = "<?php echo $password;?>"
            >
            <span class="invalid-feedback"><?php echo $password_err; ?></span>
            <div class="pass"><a href="#">Forgot password?</a></div>    
			<input type="submit" value="Sign up"></button>
		</form>
	</div>
</body>
</html>
 