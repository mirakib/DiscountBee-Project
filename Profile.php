<!-- profile.php -->

<!DOCTYPE html>
<html>
<head>
  <title>Profile</title>
  <link href='https://fonts.googleapis.com/css?family=Almarai' rel='stylesheet'>
  <style>
    body { 
  font-family: Arial, Helvetica, sans-serif;
  margin: 0.2px;
  padding: 0;
  display: flex;
  flex-direction: column;
  min-height: 100vh;
}
.container {
  max-width: 50%;
  margin: 0 auto;
  padding: 20px;
  background-color: #f8f8f8;
  border: 1px solid rgb(101, 35, 227);
  border-radius: 5px;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

h1 {
  text-align: center;
  color: #333;
  margin-bottom: 20px;
}

table {
  width: 60%;
  margin: auto;
  margin-top: 20px;
  border-collapse: collapse;
  
}

th, td {
  padding: 10px;
  text-align: left;
  border-bottom: 1px solid #ddd;
}

th {
  background-color: #f2f2f2;
  font-weight: bold;
  color: #333;
}

td {
  color: #666;
}

tr:nth-child(even) {
  background-color: #f9f9f9;
}

tr:hover {
  background-color: #f5f5f5;
}

.error-message {
  color: #ff0000;
  font-weight: bold;
}

.header {
            background-color: white;
            padding: 20px;
            text-align: center;
        }
        
        .logo {
            max-width: 300px;
            display: block;
            margin: 0 auto;
        }
        .logo {
    width: 45%;
    margin-top: 20px;
}
        .css-1bijsjo {
                height: 84px;
                line-height: 84px;
                }

                .css-1qpa9mn {
  margin: 5px;
  width: auto;
  overflow: visible;
  background: rgb(224, 228, 235);
  display: inline-block;
  padding: 9px 12px 7px;
  font-size: 16px;
  border-radius: 5px;
  color: rgb(7, 31, 69);
  line-height: normal;
  text-decoration: none;
  border: medium none;
}
.button-container {
      text-align: center;
      margin-top: 20px;
    }

    .button-container button {
      display: inline-block;
      padding: 10px 20px;
      margin-right: 10px;
      border: none;
      border-radius: 5px;
      background-color: #ff0000;
      color: #fff;
      font-size: 16px;
      cursor: pointer;
    }

    .button-container button:hover {
      background-color: #cc0000;
    }
  </style>
</head>
<body>
    <nav class="css-1bijsjo">
        <div>
            <div style="float: left; position: relative; width: 25%; padding-left: 10px; padding-right: 10px;">
                <a href="home.php" aria-label="Back" tabindex="0" element="a" class="css-1qpa9mn">
                    <svg style="vertical-align: top;" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M8 1L7.542 1.379L1 8.628V14C1 14.552 1.448 15 2 15H5C5.552 15 6 14.552 6 14V10C6 9.448 6.448 9 7 9H9C9.552 9 10 9.448 10 10V14C10 14.552 10.448 15 11 15H14C14.552 15 15 14.552 15 14V8.628L8.458 1.379L8 1Z" stroke="#272727" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                    <span class="_3c8dys">
                        Discount Bee</span>
                </a>
            </div>

            <div style="float: left; position: relative; width: 50%; padding-left: 10px; padding-right: 10px; text-align: center;">
                <a href="Home.php" class="css-1y633en">
                    <img class="logo" src="logo.png" class="css-10qpvih">
                </a>
            </div>
      
        </div>
    </nav>

  <div class="container">
    <h1>Your Profile</h1>
    <?php
      // Check if the user is logged in and the email is stored in the session
      session_start();
      if (isset($_SESSION['email'])) {
        $email = $_SESSION['email'];

        // Connect to the database
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "discountbee";

        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
        }

        // Prepare and execute SQL query
        $sql = "SELECT * FROM user_info WHERE email = '$email'";
        $result = $conn->query($sql);

        // Display user information
        if ($result->num_rows > 0) {
          echo "<table>";
          while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<th>Name:</th><td>".$row["Name"]."</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<th>Email:</th><td>".$row["Email"]."</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<th>Age:</th><td>".$row["Age"]."</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<th>Gender:</th><td>".$row["Gender"]."</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<th>Password:</th><td>".$row["Password"]."</td>";
            echo "</tr>";
          }
          echo "</table>";
        } else {
          echo "No user found with the provided email.";
        }

        $conn->close();
      } else {
        echo "Please log in to view the your profile.";
      }
    ?>
  </div>

  <div class="button-container">
      <button onclick="location.href='home.php'" style="background-color:rgb(101, 35, 227);;">Home</button>
      <button onclick="location.href='logout.php'">Logout</button>
    </div>

</body>
</html>
