
<?php

$conn = mysqli_connect("localhost", "ashwin", "ramesh", "webtechiifor12");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['submit'])) {

    $id = $_POST['id'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];

    $sql = "INSERT INTO newtable (id, firstname, lastname, email)
            VALUES ('$id', '$firstname', '$lastname', '$email')";

    if (mysqli_query($conn, $sql)) {
        echo "Record inserted successfully";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
} 
mysqli_close($conn);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Insert Form</title>
</head>
<body>

<h2>Insert Data</h2>

<form method="post" action="">
    ID: <input type="number" name="id" required><br><br>
    First Name: <input type="text" name="firstname" required><br><br>
    Last Name: <input type="text" name="lastname" required><br><br>
    Email: <input type="email" name="email" required><br><br>
    
    <input type="submit" name="submit" value="Insert">
</form>

</body>
</html>
