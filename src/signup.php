<?php
include 'config.php';
if ($_POST) {
    $u = $_POST['username'];
    $p = $_POST['password'];
    mysqli_query($conn, "INSERT INTO users (username, password, role) VALUES ('$u', '$p', 'user')");
    echo "Registered! <a href='login.php'>Login</a>";
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Sign Up - BUBT CTF Restaurant</title>
</head>
<body style="margin: 0; padding: 0; font-family: Arial, sans-serif; background: linear-gradient(to right, #fbc2eb, #a6c1ee); display: flex; justify-content: center; align-items: center; height: 100vh; flex-direction: column;">

  <!-- Title -->
  <h2 style="color: #2d3436; margin-bottom: 30px;">📝 Sign Up for <span style="color: #6c5ce7;"> BUBT CTF Restaurant</span></h2>

  <!-- Sign-Up Form -->
  <form method="POST" style="background-color: white; padding: 30px 40px; border-radius: 12px; box-shadow: 0 6px 20px rgba(0,0,0,0.15); text-align: center;">
    <input name="username" placeholder="Username" style="width: 100%; padding: 12px; margin-bottom: 15px; border: 1px solid #ccc; border-radius: 8px; font-size: 16px;"><br>
    
    <input type="password" name="password" placeholder="Password" style="width: 100%; padding: 12px; margin-bottom: 20px; border: 1px solid #ccc; border-radius: 8px; font-size: 16px;"><br>
    
    <button type="submit" style="padding: 12px 30px; background-color: #00b894; color: white; border: none; border-radius: 8px; font-size: 16px; cursor: pointer;">Sign Up</button>
  </form>

<p style="margin-top: 20px; font-size: 14px; color: #2d3436;">
    Already registered? <a href="login.php" style="color: #6c5ce7; text-decoration: none;">Login</a>
  </p>


  <!-- Footer -->
  <footer style="margin-top: 30px; font-size: 14px; color: #444;">
    &copy; <?php echo date("Y"); ?> BUBT AI Cyber Community. All rights reserved.
  </footer>

</body>
</html>

