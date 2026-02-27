<!DOCTYPE html>
<html>
    <body>
        <?php
        if ($_POST["username"] || $_POST["password"]) {
            echo "Welcome " . ($_POST["username"]);
            echo "<br>";
            echo "Your password is " . ($_POST["password"]);
        }
        ?>
        <form action="" method="post">
            <h1>Welcome</h1>
            Username: <input type="text" name="username">
            <br>
            Password: <input type="password" name="password">
            <br>
            <input type="submit" value="Submit">
        </form>
    </body>
</html>