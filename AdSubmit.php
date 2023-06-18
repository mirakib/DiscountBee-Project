<?php
if (isset($_POST['submit'])) {

  $tagline = $_POST['tagline'];
  $hyperlink = $_POST['hyperlink'];
  $redeem_condition = $_POST['redeem_condition'];

  $image = $_FILES['image']['tmp_name'];
  $image_data = file_get_contents($image);

  $conn = mysqli_connect('localhost', 'root', '', 'discountbee');
  $query = "INSERT INTO discount_cards (image, tagline, hyperlink, redeem_condition)
            VALUES (?, ?, ?, ?)";
  $stmt = mysqli_prepare($conn, $query);
  mysqli_stmt_bind_param($stmt, "ssss", $image_data, $tagline, $hyperlink, $redeem_condition);
  mysqli_stmt_execute($stmt);

  if (mysqli_stmt_affected_rows($stmt) > 0) {
    echo "Discount card submitted successfully.";
  } else {
    echo "Error submitting discount card.";
  }

  mysqli_stmt_close($stmt);
  mysqli_close($conn);
}
?>