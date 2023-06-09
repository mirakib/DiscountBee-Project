<?php

<?php
session_start();

if (isset($_SESSION["email"])) {
    // Redirect to the home page or any other page
    header("Location: home.php");
    exit;
}
else{
    echo "You are logged in for now";
}
?>
