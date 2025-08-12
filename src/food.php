<?php
include 'config.php';
$id = $_GET['id'];
$res = mysqli_query($conn, "SELECT * FROM food WHERE id = '$id'");
$row = mysqli_fetch_assoc($res);
echo "<h2>{$row['name']}</h2><p>Price: {$row['price']}</p>";
?>
