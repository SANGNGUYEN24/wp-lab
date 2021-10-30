<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myuser";
// $dbname2 = "myuser";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// $conn2 = new mysqli($servername, $username, $password, $dbname2);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
// Check connection
// if ($conn2->connect_error) {
//   die("Connection failed: " . $conn2->connect_error);
// }

// Create a db
// $sql = "CREATE DATABASE myuser";
// mysqli_query($conn, $sql);

// Create product table
// $sql = "CREATE TABLE product(
// product_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
// product_name VARCHAR(255) NOT NULL,
// price INT(10) UNSIGNED NOT NULL,
// reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
// )";

$sql = "CREATE TABLE newuser(
user_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
username VARCHAR(255) NOT NULL,
password VARCHAR(255) NOT NULL,
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

// if ($conn->query($sql) === TRUE) {
//   echo "Table [product] created successfully";
// } else {
//   echo "Error creating table: " . $conn->error;
// }
if ($conn->query($sql) === TRUE) {
  echo "Table [user] created successfully";
}else {
  echo "Error creating table: " . $conn->error;
}

// $sql = "INSERT INTO product(product_name, price) VALUES ('Flutter app', 250)";
$sql2 = "INSERT INTO newuser(username, password) VALUES ('sang123', '987654321')";

// if ($conn->query($sql) === TRUE) {
//   echo "New record created successfully";
// } else {
//   echo "Error: " . $sql . "<br>" . $conn->error;
// }
if ($conn->query($sql2) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql2 . "<br>" . $conn->error;
}


$conn->close();
// $conn2->close();
?>
