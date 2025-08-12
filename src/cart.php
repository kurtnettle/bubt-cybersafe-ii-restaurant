<?php
include 'config.php';
if (!isset($_SESSION['user'])) die("<div style='color:red; text-align:center; margin-top:20px;'>Login required</div>");
$uid = $_SESSION['user'];
$fid = $_GET['id'];
$price = $_GET['price']; // ⚠️ This is still vulnerable to CSRF and price tampering

mysqli_query($conn, "INSERT INTO cart (user_id, food_id, price) VALUES ('$uid', '$fid', '$price')");

echo "
<div style='
  max-width: 500px;
  margin: 50px auto;
  padding: 20px;
  border: 2px solid #ddd;
  border-radius: 10px;
  text-align: center;
  background: #f9f9f9;
  font-family: Arial, sans-serif;
  box-shadow: 0px 0px 10px rgba(0,0,0,0.1);'>
  <h2 style='color: green;'>✅ Item added to cart!</h2>
  <p>Food ID: <strong>$fid</strong></p>
  <p>Price: <strong>$$price</strong></p>
  <a href='dashboard.php' style='
    display: inline-block;
    margin-top: 15px;
    padding: 10px 20px;
    background: #007BFF;
    color: white;
    text-decoration: none;
    border-radius: 5px;'>Back to Home</a>
</div>

<p style='text-align:center; font-size: 12px; margin-top: 30px; color: gray;'>&copy; " . date('Y') . " BUBT AI Cyber Community. All rights reserved.</p>
";
?>

