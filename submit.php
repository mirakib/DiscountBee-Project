<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Database connection
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "discountbee";

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);

  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  // Prepare and bind the SQL statement
  $stmt = $conn->prepare("INSERT INTO contacts (first_name, last_name, email, company, phone_number, country, user_type, job_function, seniority_level, message, interests) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
  $stmt->bind_param("sssssssssss", $firstName, $lastName, $email, $company, $phoneNumber, $country, $userType, $jobFunction, $seniorityLevel, $message, $interests);

  // Set the form data to variables
  $firstName = $_POST['firstName'];
  $lastName = $_POST['lastName'];
  $email = $_POST['email'];
  $company = $_POST['company'];
  $phoneNumber = $_POST['phoneNumber'];
  $country = $_POST['country'];
  $userType = $_POST['areYou'];
  $jobFunction = $_POST['jobFunction'];
  $seniorityLevel = $_POST['seniorityLevel'];
  $message = $_POST['message'];
  $interests = implode(", ", $_POST['interests']); 

  // Execute the statement
  if ($stmt->execute()) {
    // Success message
    echo '<script>alert("Form submitted successfully!");</script>';
  } else {
    // Failure message
    echo '<script>alert("Error submitting the form.");</script>';
  }

  // Close statement and database connection
  $stmt->close();
  $conn->close();
}
?>
