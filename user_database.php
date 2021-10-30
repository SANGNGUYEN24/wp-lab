<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myuser";
$dbname2 = "myproduct";

// Create connection
$mysqli = new mysqli($servername, $username, $password, $dbname);
$mysqli2 = new mysqli($servername, $username, $password, $dbname2);

// Check connection
if ($mysqli->connect_error) {
  die("Connection failed: " . $mysqli->connect_error);
}
else{
    echo "";
}
if ($mysqli2->connect_error) {
  die("Connection failed: " . $mysqli2->connect_error);
}
else{
    echo "";
}
?>