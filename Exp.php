<?php
$conn = mysqli_connect('localhost', 'root', '', 'discountbee');

// Retrieve discount card data from the database
$query = "SELECT * FROM discount_cards LIMIT 6";
$result = mysqli_query($conn, $query);

// Display discount cards
echo "<!DOCTYPE html>";
echo "<html lang='en'>";
echo "<head>";
echo "<meta charset='UTF-8'>";
echo "<meta name='viewport' content='width=device-width, initial-scale=1.0'>";
echo "<title>Discount Cards</title>";
echo "<style>";
echo ".discount-cards-container {";
echo "  display: flex;";
echo "  flex-wrap: wrap;";
echo "  justify-content: center;";
echo "}";
echo ".discount-card {";
echo "  width: 300px;";
echo "  border-radius: 8px;";
echo "  overflow: hidden;";
echo "  box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);";
echo "  margin: 10px;";
echo "}";
echo ".discount-card img {";
echo "  width: 100%;";
echo "  height: auto;";
echo "}";
echo ".discount-card .discount-tagline {";
echo "  padding: 10px;";
echo "  background-color: #f9f9f9;";
echo "  text-align: center;";
echo "  color: #333;";
echo "}";
echo ".discount-card h1 {";
echo "  font-size: 20px;";
echo "  margin: 0;";
echo "}";
echo "#cardModal {";
    echo "  display: none;";
    echo "  position: fixed;";
    echo "  top: 50%;";
    echo "  left: 50%;";
    echo "  transform: translate(-50%, -50%);";
    echo "  background-color: #fff;";
    echo "  padding: 20px;";
    echo "  border-radius: 8px;";
    echo "  box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);";
    echo "  z-index: 9999;";
    echo "}";
    echo "#cardModal h2 {";
    echo "  margin-top: 0;";
    echo "}";
    echo "#cardModal p strong {";
    echo "  margin-right: 5px;";
    echo "}";
    echo "#cardModal button {";
    echo "  margin-top: 10px;";
    echo "  background-color: #f9f9f9;";
    echo "  padding: 8px 16px;";
    echo "  border-radius: 4px;";
    echo "  border: none;";
    echo "  cursor: pointer;";
    echo "}";
    echo "#cardModal button:hover {";
    echo "  background-color: #e5e5e5;";
    echo "}";
echo "</style>";
echo "</head>";
echo "<body>";

echo "<div class='discount-cards-container'>";

while ($row = mysqli_fetch_assoc($result)) {
  echo "<div class='discount-card' onclick='showCardInfo(\"" . $row['tagline'] . "\", \"" . $row['hyperlink'] . "\", \"" . $row['redeem_condition'] . "\")'>";
  echo "<img src='data:image/jpeg;base64," . base64_encode($row['image']) . "' alt='Discount Image'>";
  echo "<div class='discount-tagline'>";
  echo "<h1>" . $row['tagline'] . "</h1>";
  echo "</div>";
  echo "</div>";
}

echo "</div>";

echo "<div id='cardModal'>";
echo "<h1><strong></strong> <span id='tagline'></span></h1>";
echo "<p><strong>Get the discount:</strong> <a id='hyperlink' href=''></a></p>";
echo "<p><strong>How to Redeem:</strong> <span id='redeemCondition'></span></p>";
echo "<button onclick='document.getElementById(\"cardModal\").style.display = \"none\";'>Close</button>";
echo "</div>";

echo "<script>";
echo "function showCardInfo(tagline, hyperlink, redeemCondition) {";
echo "  var modal = document.getElementById(\"cardModal\");";
echo "  document.getElementById(\"tagline\").innerHTML = tagline;";
echo "  document.getElementById(\"hyperlink\").innerHTML = hyperlink;";
echo "  document.getElementById(\"hyperlink\").href = hyperlink;";
echo "  document.getElementById(\"redeemCondition\").innerHTML = redeemCondition;";
echo "  modal.style.display = \"block\";";
echo "}";
echo "</script>";

echo "</body>";
echo "</html>";

mysqli_close($conn);
?>
