
    <?php
    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve the form data
        $email = $_POST["email"];
        $password = $_POST["password"];

        // Check the credentials against the user_info table
        // Replace this with your database connection and query code
        $servername = "localhost";
        $username = "root";
        $password_db = "";
        $dbname = "discountbee";

        // Create a new connection
        $conn = new mysqli($servername, $username, $password_db, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Prepare the SQL statement
        $sql = "SELECT * FROM user_info WHERE email = '$email' AND password = '$password'";

        // Execute the query
        $result = $conn->query($sql);

        // Check if the query returned any rows
        if ($result->num_rows > 0) {
            // Valid credentials, redirect to home.html
            header("Location: home.html");
            exit;
        } else {
            // Invalid credentials, display an error message
            echo '<div style="color: red;">Invalid email or password</div>';
        }

        // Close the database connection
        $conn->close();
    }
    ?>