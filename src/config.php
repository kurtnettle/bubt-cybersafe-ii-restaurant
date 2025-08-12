<?php
$conn = mysqli_connect("localhost", "ctf", "ctf123", "ctf");
if (!$conn) die("Connection failed: " . mysqli_connect_error());
session_start();
?>
