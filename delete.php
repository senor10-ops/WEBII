<?php

include("databaseconnection.php");
$id_deletion = 19;

$sql = "DELETE FROM users WHERE id = '$id_deletion'";
try {
    mysqli_query($conn, $sql);
    echo "User deleted successfully.";
} 
catch (mysqli_sql_exception $e) {
    echo "Could not delete: " . $e->getMessage();
}


mysqli_close($conn);
?> 