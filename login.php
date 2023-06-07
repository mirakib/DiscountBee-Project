<?php
    session_start(); // Start the session

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = $_POST["email"];
        $password = $_POST["password"];

        $servername = "localhost";
        $username = "root";
        $password_db = "";
        $dbname = "discountbee";

        $conn = new mysqli($servername, $username, $password_db, $dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT * FROM user_info WHERE email = '$email' AND password = '$password'";

        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $_SESSION['email'] = $email; // Set the 'email' key in the $_SESSION array
            header("Location: home.html");
            exit;
        } else {
            echo '<script>alert("Invalid email or password"); window.location.href = "login.html";</script>';
        }


    }
?>
