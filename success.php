<?php
include("databaseconnection.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "SELECT id, user, password FROM users WHERE id = $id";
    $result = mysqli_query($conn, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        echo "<h2>User Inserted Successfully:</h2>";
        echo "<table border='1'>
                <tr><th>ID</th><th>Username</th><th>Hashed Password</th></tr>
                <tr>
                    <td>{$row['id']}</td>
                    <td>{$row['user']}</td>
                    <td>{$row['password']}</td>
                </tr>
              </table>";
    } else {
        echo "User not found.";
    }

    mysqli_close($conn);
} else {
    echo "No user ID provided.";
}
?>
