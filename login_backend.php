<?php

// Define the database connection variables.
$host = "localhost";
$username = "root";
$password = "";
$dbname = "website";


// Create a connection to the database.
$conn = mysqli_connect($host,$username,$password,$dbname);

// Check if the connection was successful.
if ($conn === false) {
  die("Connection failed: " . mysqli_connect_error());
}

// Retrieve the username and password from the login form.
$mail = $_POST["email"];
$password = $_POST["password"];

// Check if the username and password exist in the database.
$sql = "SELECT * FROM register WHERE Email='$mail' AND password='$password'";
$result = mysqli_query($conn, $sql);

// If the username and password exist, the user is logged in.
if (mysqli_num_rows($result) > 0) {
  // Set the session variables.
  $_SESSION["Email"] = $mail;
  $_SESSION["logged_in"] = true;

  // Redirect the user to the home page.
  header("Location: home.php");
} else {
  // The username and password do not exist, so the user is not logged in.
  echo "Invalid username or password.";
}

// Close the database connection.
mysqli_close($conn);

?>
