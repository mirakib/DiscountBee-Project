<?php
session_start();

if (!isset($_SESSION['email'])) {
    header("Location: loginHTML.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: "Lato", sans-serif;
}

.sidebar {
  height: 100%;
  width: 250px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: rgb(101, 35, 227);
  overflow-x: hidden;
  padding-top: 60px;
}

.sidebar a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: white;
  display: block;
  transition: 0.3s;
}

.sidebar a:hover {
  color: black;
}

#main {
  margin-left: 250px;
  padding: 16px;
}

.form-container {
  margin-top: 80px;
}


@media screen and (max-height: 450px) {
  .sidebar {padding-top: 15px;}
  .sidebar a {font-size: 18px;}
}

.form-container {
  margin-top: 80px;
  
}

.form-container form {
border: 1px solid rgb(101, 35, 227);
  width: 50%;
  margin: 0 auto;
  padding: 20px;
  border-radius: 5px;
}

.form-container label {
  display: block;
  margin-bottom: 2px;
  font-weight: bold;
}

.form-container input[type="text"],
.form-container textarea {
  width: 95%;
  padding: 10px;
  border: 1px solid rgb(101, 35, 227);;
  border-radius: 4px;
}

.form-container input[type="submit"] {
  background-color: rgb(101, 35, 227);
  color: white;
  padding: 10px 15px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

.form-container input[type="submit"]:hover {
  background-color: #45a049;
}


</style>
</head>
<body>

<div id="mySidebar" class="sidebar">
  <a href="profile.php">Profile</a>
  <a href="AddCard.php">Add card</a>
  <a href="ViewCard.php">View Card</a>
  <a href="Home.php">Home</a>
</div>

<div id="main">
  <div class="form-container">
  <form method="POST" action="AdSubmit.php" enctype="multipart/form-data">
  <label for="image">Image:</label>
  <input type="file" name="image" required>
  <br><br>

  <label for="tagline">Tagline:</label>
  <input type="text" name="tagline" required>
  <br><br>

  <label for="hyperlink">Hyperlink:</label>
  <input type="text" name="hyperlink" required>
  <br><br>

  <label for="redeem_condition">How to Redeem:</label>
  <textarea name="redeem_condition" rows="4" cols="50" required></textarea>
  <br><br>

  <label for="category">Category:</label>
  <input type="text" name="category" required>
  <br><br>

  <label for="company">Company:</label>
  <input type="text" name="company" required>
  <br><br>

  <input type="submit" name="submit" value="Submit">
</form>

  </div>
</div>

</body>
</html>
