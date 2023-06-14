<?php
    session_start();

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
            $row = $result->fetch_assoc();
            $_SESSION['email'] = $email;
            header("Location: home.php");
            exit;
        } else {
            echo '<script>alert("Invalid email or password"); window.location.href = "loginHTML.php";</script>';
        }
    }
?>
