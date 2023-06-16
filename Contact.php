<?php
// Establish a database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "discountbee";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];
$company = $_POST['company'];
$phoneNumber = $_POST['phoneNumber'];
$country = $_POST['country'];
$areYou = $_POST['areYou'];
$jobFunction = $_POST['jobFunction'];
$message = $_POST['message'];


$sql = "INSERT INTO contacts (first_name, last_name, email, company, phone_number, country, user_type, job_function, message)
        VALUES ('$firstName', '$lastName', '$email', '$company', '$phoneNumber', '$country', '$areYou', '$jobFunction', '$message')";

if ($conn->query($sql) === TRUE) {
  echo "Thank you for submitting your information. We will be in touch shortly.";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>
