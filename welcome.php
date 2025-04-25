<!DOCTYPE html>
<html>
<body>

<h2>Form Data Received via GET</h2>

<?php
$name = $_GET["name"];
$email = $_GET["email"];

echo "Welcome, " . htmlspecialchars($name) . "!<br>";
echo "Your email address is: " . htmlspecialchars($email);
?>

</body>
</html>
