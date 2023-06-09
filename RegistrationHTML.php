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
    <title>Sign up - DiscountBee</title>

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
      margin: 100px auto;
      background-color: #fff;
      border-radius: 20px;
      border: 1px solid  rgb(101, 35, 227);
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      padding: 40px;
    }

    h2 {
      text-align: center;
      margin-bottom: 30px;
    }

    .form-group {
      margin-bottom: 20px;
    }

    .form-group label {
      display: block;
      font-weight: bold;
      margin-bottom: 5px;
    }

    .form-group input,
    .form-group select {
        background: rgb(239, 241, 245);
      width: 100%;
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
      background-color: rgb(101, 35, 227);
    }

    .form-group .message {
      color: #666;
      text-align: center;
      margin-top: 20px;
    }

    /* Additional Styles */
    @media (max-width: 500px) {
      .container {
        max-width: 90%;
      }
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
                <a href="Home.php" class="css-1y633en">
                    <img class="logo" src="logo.png" class="css-10qpvih">
                </a>
            </div>
      
        </div>
    </nav>


    <div class="container">
        <h2>Let's go........</h2>
        <form method="POST" action="Registration.php">
          <div class="form-group">
            <label for="name">Name</label>
            <input type="text" id="name" name="name">
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email">
          </div>
          <div class="form-group">
            <label for="age">Age</label>
            <input type="date" id="age" name="age">
          </div>
          <div class="form-group">
            <label for="gender">Gender</label>
            <select id="gender" name="gender">
              <option value=""></option>
              <option value="Male">Male</option>
              <option value="Female">Female</option>
              <option value="Other">Other</option>
            </select>
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <?php if (isset($passwordError)) { ?>
                <span class="warning"><?php echo $passwordError; ?></span>
            <?php } ?>
            <input type="password" id="password" name="password" name="password">
        </div>
        
          <div class="form-group">
            <label for="confirm-password">Confirm Password</label>
            <input type="password" id="confirm-password" name="confirm-password">
          </div>
          <div class="form-group">
            <button type="submit">Sign up</button>
          </div>
          <div class="form-group message">
            Already have an account? <a href="loginHTML.php">Sign in</a>
          </div>
        </form>
      </div>

      <div class="footer">
        <p>&copy; 2023 Discount Bee. All rights reserved.</p>
      </div>
  
</body>
</html>