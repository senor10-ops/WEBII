<?php
// Very basic form validation
if (isset($_POST['submit'])) {
    $name = $_POST['name'];

    if (empty($name)) {
        echo "Name is required!";
    } else {
        echo "Hello, " . htmlspecialchars($name) . "!";
    }
}
?>

<form method="post">
  Name: <input type="text" name="name">
  <input type="submit" name="submit" value="Submit">
</form>
                         