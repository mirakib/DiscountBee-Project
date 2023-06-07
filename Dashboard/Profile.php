<?php
session_start(); // Start the session

if (isset($_SESSION['email'])) {
    $email = $_SESSION['email'];

    // ...

    // Fetch user data from the database based on the email
    $sql = "SELECT * FROM user_info WHERE email = '$email'";
    $result = $conn->query($sql);

    // ...

    // Display the email on the page
    echo "Logged in as: $email";
} 
?>
