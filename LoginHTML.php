<?php
session_start();

if (isset($_SESSION["email"])) {
    // Redirect to the home page or any other page
    header("Location: home.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Almarai' rel='stylesheet'>
    <title>Sign in - DiscountBee</title>

    <style>
        body {
            color:  black;
    font-family: 'Almarai';
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

.container {
      max-width: 400px;
      margin: 50px auto;
      background-color: #fff;
      border-radius: 20px;
      border: 1px solid  rgb(101, 35, 227);
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      padding: 40px;
    }

    h2 {
      text-align: center;
      font-weight: bolder;
    }

    p {
      text-align: center;
    }

    .form-group {
      margin-bottom: 20px;
    }

    .form-group label {
      display: block;
      font-size: small;
      font-weight: bold;
      margin-bottom: 5px;
    }

    .form-group input {
      width: 95%;
      padding: 10px;
      border: 1px solid  rgb(101, 35, 227);
      border-radius: 3px;
    }

    .form-group button {
      width: 100%;
      padding: 10px;
      border: none;
      border-radius: 3px;
      background-color: rgb(101, 35, 227);
      color: #fff;
      font-weight: bold;
      cursor: pointer;
    }

    .form-group button:hover {
      background-color: rgb(101, 35, 200);
    }

    .form-group .message {
      color: #666;
      text-align: center;
      margin-top: 20px;
    }

    .footer {
      background-color: white;
      color: black;
      padding: 20px;
      text-align: center;
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
                <a href="home.php" class="css-1y633en">
                    <img class="logo" src="logo.png" class="css-10qpvih">
                </a>
            </div>
      
        </div>
    </nav>


    <div class="container">
    <h2>Hello again!</h2>
    <p>Log in to your <span style="color: blue;">Discount Bee</span> account</p>
    <form method="post" action="login.php">
      <div class="form-group">
          <label for="email">Email</label>
          <input type="email" id="email" name="email">
      </div>
      <div class="form-group">
          <label for="password">Password</label>
          <input type="password" id="password" name="password">
      </div>
      <div class="form-group">
          <button type="submit">Sign in</button>
      </div>
      <div class="form-group message">
          Don't have an account? <a href="registrationHTML.php">Sign in</a>
      </div>
  </form>  
  </div>

  <div class="footer">
    <p>&copy; 2023 Discount Bee. All rights reserved.</p>
  </div>
  
</body>
</html>