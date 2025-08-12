<?php
include 'config.php';

$q = $_GET['q'] ?? '';

// Display the search query — still vulnerable to XSS

// Show CTF flag if exact XSS payload is used
if ($q === '<script>alert(document.cookie)</script>') {
    echo "<div style='color: red; font-weight: bold; font-size: 18px; margin: 20px 0;'>
            🏁 CTF Flag: FLAG{XSS_BYPASS_SUCCESS}
          </div>";
}
else
{
echo "<h3>Results for: $q</h3>";
}

// Query the DB and show food items
$res = mysqli_query($conn, "SELECT * FROM food WHERE name LIKE '%$q%'");
while ($r = mysqli_fetch_assoc($res)) {
    echo "<div>{$r['name']} - {$r['price']}</div>";
}
?>


