<?php
include '../config.php';

if ($_SESSION['role'] != 'admin') die("Access denied");

if ($_POST) {
  move_uploaded_file($_FILES['file']['tmp_name'], "../uploads/" . $_FILES['file']['name']);
  $n = $_POST['name'];
  $p = $_POST['price'];
  $i = $_FILES['file']['name'];
  mysqli_query($conn, "INSERT INTO food (name, price, image) VALUES ('$n', '$p', '$i')");
  echo "<div style='color: green; font-weight: bold; margin-bottom: 20px;'>Food uploaded successfully!</div>";
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Upload Food - Admin Panel</title>
</head>
<body style="font-family: Arial, sans-serif; background: #f4f4f4; text-align: center; padding: 40px;">

  <h1 style="color: #333;">Upload New Food Item</h1>

  <form method="POST" enctype="multipart/form-data" style="background: white; padding: 30px; display: inline-block; border-radius: 10px; box-shadow: 0 0 10px rgba(0,0,0,0.1);">
    <input name="name" placeholder="Food Name" required style="padding: 10px; margin-bottom: 15px; width: 300px; border: 1px solid #ccc; border-radius: 5px;"><br>
    <input name="price" placeholder="Price" type="number" step="0.01" required style="padding: 10px; margin-bottom: 15px; width: 300px; border: 1px solid #ccc; border-radius: 5px;"><br>
    <input type="file" name="file" required style="margin-bottom: 20px;"><br>
    <button style="padding: 10px 20px; background-color: #28a745; color: white; border: none; border-radius: 5px; cursor: pointer;">Upload</button>
  </form>

  <div style="margin-top: 20px;">
    <a href="dashboard.php" style="text-decoration: none; color: #007bff;">&larr; Back to Dashboard</a>
  </div>

  <footer style="margin-top: 40px; color: #888; font-size: 14px;">
    &copy; <?php echo date("Y"); ?> BUBT AI Cyber Community. All rights reserved.
  </footer>

</body>
</html>

