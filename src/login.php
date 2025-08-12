<?php
include 'config.php';
if ($_POST) {
    $u = $_POST['username'];
    $p = $_POST['password'];
    $q = "SELECT * FROM users WHERE username='$u' AND password='$p'";
    $res = mysqli_query($conn, $q);
    if ($row = mysqli_fetch_assoc($res)) {
        $_SESSION['user'] = $u;
        $_SESSION['role'] = $row['role'];
        header("Location: " . ($row['role'] == 'admin' ? 'admin/dashboard.php' : 'dashboard.php'));
    } else echo "Login failed";
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Login - BUBT CTF Restaurant</title>
</head>
<body style="margin: 0; padding: 0; font-family: Arial, sans-serif; background: linear-gradient(to right, #c6ffdd, #fbd786, #f7797d); display: flex; justify-content: center; align-items: center; height: 100vh; flex-direction: column;">

  <!-- Title -->
  <h2 style="color: #2c3e50; margin-bottom: 30px;">🔐 Login to <span style="color: #e74c3c;"> BUBT CTF Restaurant</span></h2>

  <!-- Login Form -->
  <form method="POST" style="background-color: white; padding: 30px 40px; border-radius: 12px; box-shadow: 0 6px 20px rgba(0,0,0,0.2); text-align: center;">
    <input name="username" placeholder="Username" style="width: 100%; padding: 12px; margin-bottom: 15px; border: 1px solid #ccc; border-radius: 8px; font-size: 16px;"><br>
    
    <input type="password" name="password" placeholder="Password" style="width: 100%; padding: 12px; margin-bottom: 20px; border: 1px solid #ccc; border-radius: 8px; font-size: 16px;"><br>
    
    <button type="submit" style="padding: 12px 30px; background-color: #3498db; color: white; border: none; border-radius: 8px; font-size: 16px; cursor: pointer;">Login</button>
  </form>

<p style="margin-top: 20px; font-size: 14px; color: #2d3436;">
    Not registered? <a href="signup.php" style="color: #0984e3; text-decoration: none;">Sign Up</a>
  </p>


  <!-- Footer -->
  <footer style="margin-top: 30px; font-size: 14px; color: #555;">
    &copy; <?php echo date("Y"); ?> BUBT AI Cyber Community. All rights reserved.
  </footer>

</body>
</html>

