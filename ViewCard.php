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
  margin: 0;
  padding: 0;
}

.sidebar {
  height: 100%;
  width: 250px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: rgb(101, 35, 227);;
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

iframe {
  width: 100%;
  height: calc(100vh - 60px);
  border: none;
}

@media screen and (max-height: 450px) {
  .sidebar {padding-top: 15px;}
  .sidebar a {font-size: 18px;}
}
</style>
</head>
<body>

<div id="mySidebar" class="sidebar">
  <a href="profile.php">Profile</a>
  <a href="AddCard.php">Add card</a>
  <a href="ViewCard.php">View Card</a>
  <a href="Home.php"">Home</a>
</div>

<div id="main">
  <iframe src="exp.php" frameborder="0"></iframe>
</div>

</body>
</html>
