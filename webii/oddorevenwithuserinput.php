<html>
<body>
<form method="post">
Enter a number: <input type="number" name="number">
<input type="submit" value="Check">
</form>

<?php
if(isset($_POST['number'])) {
    $num = $_POST['number'];

    if($num % 2 == 0) {
        echo "$num is Even";
    } else {
        echo "$num is Odd";
    }
}
?>
</body>
</html>