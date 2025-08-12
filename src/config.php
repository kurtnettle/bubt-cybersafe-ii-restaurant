<?php
$conn = mysqli_connect("db", "ctf", "ctf123", "ctf");
if (!$conn) die("Connection failed: " . mysqli_connect_error());
session_start();
?>
