<?php
include 'config.php';
if (!isset($_SESSION['user']) || $_SESSION['role'] !== 'user') die("Access denied");
$foods = mysqli_query($conn, "SELECT * FROM food");
?>
<!DOCTYPE html>
<html>
<head>
  <title>Dashboard - BUBT CTF Restaurant</title>
</head>
<body style="font-family: Arial, sans-serif; background: #f4f4f4; padding: 20px; text-align: center;">

<div style="position: absolute; top: 20px; right: 20px;">
    <form action="logout.php" method="post">
      <button type="submit" style="padding: 8px 15px; background-color: #dc3545; color: white; border: none; border-radius: 5px; cursor: pointer;">
        Logout
      </button>
    </form>
  </div>
  <h1 style="color: #333;"> BUBT Welcome to CTF Restaurant</h1>

  <form method="GET" action="search.php" style="margin-bottom: 30px;">
    <input name="q" placeholder="Search..." style="padding: 8px; width: 200px; border: 1px solid #ccc; border-radius: 5px;">
    <button style="padding: 8px 15px; background-color: #28a745; color: white; border: none; border-radius: 5px;">Search</button>
  </form>

  <div style="display: flex; flex-wrap: wrap; justify-content: center; gap: 20px;">
    <?php while ($f = mysqli_fetch_assoc($foods)) { ?>
      <div style="background: white; border: 1px solid #ddd; padding: 15px; width: 200px; box-shadow: 2px 2px 8px rgba(0,0,0,0.1); border-radius: 10px;">
        <img src="uploads/<?php echo $f['image']; ?>" width="100%" style="border-radius: 10px;">
        <h3 style="margin: 10px 0;">
          <a href="food.php?id=<?php echo $f['id']; ?>" style="text-decoration: none; color: #007bff;"><?php echo $f['name']; ?></a>
        </h3>
        <p style="margin: 5px 0;">Price: <strong><?php echo $f['price']; ?></strong></p>
        <a href="cart.php?id=<?php echo $f['id']; ?>&price=<?php echo $f['price']; ?>" 
           style="display: inline-block; padding: 8px 12px; background-color: #007bff; color: white; border-radius: 5px; text-decoration: none;">
          Add to Cart
        </a>
      </div>
    <?php } ?>
  </div>

  <footer style="margin-top: 40px; color: #666; font-size: 14px;">
    &copy; <?php echo date("Y"); ?> BUBT AI Cyber Community. All rights reserved.
  </footer>

</body>
</html>

