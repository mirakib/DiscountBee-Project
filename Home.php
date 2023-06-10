<?php
  session_start();
?>

<!DOCTYPE html>
<html>
<head>
<title>Home - DiscountBee</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href='https://fonts.googleapis.com/css?family=Almarai' rel='stylesheet'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
* {box-sizing: border-box;}

body { 
  font-family: Arial, Helvetica, sans-serif;
  margin: 0.2px;
  padding: 0;
  display: flex;
  flex-direction: column;
  min-height: 100vh;
}

.header {
  margin-left: 5%;
  margin-right: 5%;
  overflow: hidden;
  background-color: white;
  padding: 20px 10px;
}

.header a {
  float: left;
  color: black;
  text-align: center;
  padding: 12px;
  text-decoration: none;
  font-size: 18px; 
  line-height: 25px;
  border-radius: 4px;
}

.header img.logo {
  font-size: 25px;
  font-weight: bold;
  width: 20%;
  height: auto;
}

.header a:hover {
  background-color: white;
  color: black;
}

.header a.active {
  background-color: rgb(101, 35, 227);
  margin-left: 2px;
  color: white;
}

.header-right {
  float: right;
}

@media screen and (max-width: 500px) {
  .header a {
    float: none;
    display: block;
    text-align: left;
  }
  
  .header-right {
    float: none;
  }
}

.navbar {
  background-color: white;
  text-align: center;
  padding: 20px;
}

.navbar__logo {
  display: inline-block;
  margin-right: 20px;
  font-weight: bold;
  font-size: 20px;
}

.navbar__buttons {
  display: inline-block;
}

.navbar__buttons a {
  border: 1px solid gray;
  border-radius: 7px;
  display: inline-block;
  padding: 10px 20px;
  text-decoration: none;
  color: #333;
  font-weight: bold;
}

.navbar__buttons a:hover {
  border-radius: 7px;
  background-color: gray;
  color: white;
}

.navbar__dropdown {
  display: inline-block;
  position: relative;
}

.navbar__dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  z-index: 1;
}

.navbar__dropdown:hover .navbar__dropdown-content {
  display: block;
}

.navbar__dropdown-content a {
  display: block;
  padding: 10px;
  text-decoration: none;
  color: #333;
  font-weight: bold;
}

.navbar__dropdown-content a:hover {
  background-color: #ccc;
}

.gradient-section {
  
  background: linear-gradient(rgb(101, 35, 227), #000);
  text-align: center;
  padding: 50px;
  color: #fff;
}

.section-header {
  font-size: 38px;
  color: #E4FF38;
  font-weight: bolder;
  margin-bottom: 20px;
}

.search-box {
  display: inline-block;
  background-color: #fff;
  border-radius: 4px;
  padding: 10px;
}

.search-box input[type="text"] {
  width: 200px;
  padding: 5px;
  border: none;
  outline: none;
  font-size: 14px;
}

.search-box input[type="submit"] {
  background-color: #333;
  color: #fff;
  border: none;
  padding: 8px 20px;
  margin-left: 10px;
  cursor: pointer;
  border-radius: 1.5px;

}

.footer {
  position: relative;
  background-color: rgb(101, 35, 227);
  color: #fff;
  padding: 20px;
  text-align: center;
}

.fixed-footer {
  position: fixed;
  bottom: 0;
  left: 0;
  width: 100%;

}

@media screen and (max-width: 768px) {
  .footer {
    position: fixed;
    left: 0;
    bottom: 0;
  }
}

.footer__nav {
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.footer__nav img {
  width: 15%;
  height: 50px;
}

.navbar__icons {
  display: flex;
  align-items: center;
}

.navbar__icons a {
  margin-left: 10px;
}

.navbar__icons img {
  width: 30px;
  height: 30px;
}

.slideshow {
  width: 70%;
  margin: 0 auto;
  padding-top: 10px;
  padding-bottom: 10px;
}

.slideshow-container {
  position: relative;
  max-width: 100%;
  height: auto;
  
}

.slide {
  width: 100%;
  height: auto;
  display: none;
  border-radius: 15px;
  border: 1px solid black;
}

.slide.active {
  display: block;
}

.prev,
.next {
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  font-size: 30px;
  font-weight: bold;
  color: black;
  text-decoration: none;
  cursor: pointer;
}

.prev {
  left: 10px;
}

.next {
  right: 10px;
}

.footer__links {
  display: flex;
  justify-content: space-between;
  margin-top: 20px;
  
}

.footer__links__column {
  flex-basis: 70%;
  
}

.footer__links h2 {
  color: #fff;
  font-size: 20px;
  margin-bottom: 10px;
}

.footer__links ul {
  list-style: none;
  padding: 0;
  margin: 0;
}

.footer__links li {
  margin-bottom: 5px;
}

.footer__links a {
    color: #D2D6D6;
  text-decoration: none;
}

.footer__links a:hover {
  text-decoration: underline;
}

.footer__address {
  margin-top: 20px;
  text-align: left;
  color: #fff;
}

.footer__address h3,
.footer__address p {
  margin-left: 150px;
}

.footer__line {
  margin: 0 11%;
  border: none;
  border-top: 2px solid rgb(153, 148, 148); 
}

.footer__copyright {
  text-align: center;
  margin: 10px 0;
  color: rgb(245, 245, 245);
}

</style>
</head>
<body>

  <div class="header">
    <img class="logo" src="logo.png">
    <div class="header-right" id="header-buttons">
        <?php
        if (isset($_SESSION['email'])) {

            echo '<a class="active" href="Profile.php" style="background-color: white; color: black; border: 2px solid black;">Account</a>';
            echo '<a class="active" href="logout.php">Logout</a>';
        } else {

            echo '<a href="loginHTML.php">Login</a>';
            echo '<a class="active" href="registrationHTML.php">Registration</a>';
        }
        ?>
    </div>
</div>

  

<div class="navbar">
  <div class="navbar__buttons">
    <a href="#">Trending Now</a>
    <a href="#">All</a>
    <a href="#">Food</a>
    <a href="#">Fashion</a>
    <a href="#">Tech & Mobile</a>
    <a href="#">Beauty</a>
    <a href="#">Health</a>
    <a href="#">Travel</a>
    <a href="#">Entertainment</a>
    <div class="navbar__dropdown">
      <a href="#">More</a>
      <div class="navbar__dropdown-content">
      </div>
    </div>
  </div>
</div>

<div class="gradient-section">
  <h1 class="section-header">Making your life a little <br> sweeter and a lot cheaper</h1>
  <div class="search-box">
    <input type="text" placeholder="Brand, items or categories">
    <input type="submit" value="Search">
  </div>
</div>


  <div class="slideshow">
    <div class="slideshow-container">
      <a href="link1.html"><img class="slide" src="Images/Advertisements/image1.jpeg" alt="Image 1"></a>
      <a href="link2.html"><img class="slide" src="Images/Advertisements/image2.jpeg" alt="Image 2"></a>
      <a href="link3.html"><img class="slide" src="Images/Advertisements/image3.jpeg" alt="Image 3"></a>
      <a href="link4.html"><img class="slide" src="Images/Advertisements/image4.jpeg" alt="Image 4"></a>
      <a class="prev" onclick="changeSlide(-1)">&#10094;</a>
      <a class="next" onclick="changeSlide(1)">&#10095;</a>
    </div>
  </div>
  
  

<footer class="footer">
    <div class="footer__nav">
      <img src="Images/Logos/White-logo.svg" alt="Logo">
      <div class="navbar__icons">
        <div class="navbar__icons">
            <a href="#"><img src="https://cdn.jsdelivr.net/npm/simple-icons@4.4.0/icons/instagram.svg" alt="Instagram"></a>
            <a href="#"><img src="https://cdn.jsdelivr.net/npm/simple-icons@4.4.0/icons/facebook.svg" alt="Facebook"></a>
            <a href="#"><img src="https://cdn.jsdelivr.net/npm/simple-icons@4.4.0/icons/twitter.svg" alt="Twitter"></a>
          </div>
      </div>
    </div>
    

    <div class="footer__links">
        <div class="footer__links__column">
          <h2>Work with Us</h2>
          <ul>
            <li><a href="#">Advertise</a></li>
            <li><a href="#">Careers</a></li>
          </ul>
        </div>
        <div class="footer__links__column">
          <h2>Company</h2>
          <ul>
            <li><a href="#">About</a></li>
            <li><a href="#">How it Works</a></li>
            <li><a href="Term.html">Terms and Condition</a></li>
            <li><a href="Privacy.html">Privacy Policy</a></li>
          </ul>
        </div>
        <div class="footer__links__column">
          <h2>Need Help?</h2>
          <ul>
            <li><a href="Faq.html">FAQs</a></li>
            <li><a href="Contact.php">Contact</a></li>
          </ul>
        </div>
      </div>
      
      
      <div class="footer__address">
        <h3>Where to find us</h3>
        <p>Dhaka, Bangladesh</p>
        <p>Mirpur 10, 1231</p>
      </div>

      <hr class="footer__line">

<p class="footer__copyright">
  &copy; 2023 Discount Bee
</p>


</footer>

<script>

let slideIndex = 1;
showSlide(slideIndex);

function changeSlide(n) {
  showSlide(slideIndex += n);
}

function showSlide(n) {
  const slides = document.getElementsByClassName("slide");

  if (n > slides.length) {
    slideIndex = 1;
  } else if (n < 1) {
    slideIndex = slides.length;
  }

  for (let i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  

  slides[slideIndex - 1].style.display = "block";
}

document.querySelector(".prev").addEventListener("click", function() {
  changeSlide(-1);
});

document.querySelector(".next").addEventListener("click", function() {
  changeSlide(1);
});

</script>

</body>
</html>
