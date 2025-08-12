<?php
include '../config.php';
if ($_SESSION['role'] != 'admin') die("Access denied");

$users = mysqli_query($conn, "SELECT * FROM users WHERE role='user'");
?>

<!DOCTYPE html>
<html>
<head>
  <title>Admin Panel - User Management</title>
</head>
<body style="font-family: Arial, sans-serif; background: #f9f9f9; padding: 20px; text-align: center;">

  <h1 style="color: #333;">Admin Dashboard</h1>

  <div style="margin-bottom: 20px;">
    <a href="upload_food.php" style="padding: 10px 20px; background-color: #28a745; color: white; text-decoration: none; border-radius: 5px;">Upload Food</a>
    <a href="../logout.php" style="margin-left: 10px; padding: 10px 20px; background-color: #dc3545; color: white; text-decoration: none; border-radius: 5px;">Logout</a>
  </div>

  <hr style="margin: 20px auto; width: 50%;">

  <h2 style="color: #555;">Registered Users</h2>

  <div style="display: inline-block; text-align: left; margin-top: 20px;">
    <?php
    while ($u = mysqli_fetch_assoc($users)) {
      echo "<div style='margin-bottom: 10px; padding: 10px; background: white; border: 1px solid #ccc; border-radius: 5px;'>
              <strong>{$u['username']}</strong>
              <a href='delete_user.php?id={$u['id']}' style='margin-left: 10px; color: #dc3545; text-decoration: none;'>Delete</a>
            </div>";
    }
    ?>
  </div>

  <footer style="margin-top: 40px; color: #888; font-size: 14px;">
    &copy; <?php echo date("Y"); ?> BUBT AI Cyber Community. All rights reserved.
  </footer>

</body>
</html>

