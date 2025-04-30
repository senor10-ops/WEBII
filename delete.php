<?php

include("databaseconnection.php");
$id_deletion = 19;

$sql = "DELETE FROM users WHERE id = '$id_deletion'";

//sql = "DELETE FROM users where id = "19""; 
try {
    mysqli_query($conn, $sql);
    echo "User deleted successfully.";
} 
catch (mysqli_sql_exception $e) {
    echo "Could not delete: " . $e->getMessage();
}


mysqli_close($conn);
?> 



<!-- Delete
$username = "nepal";
$password = "lagrandee ";

$sql = "DELETE FROM users WHERE 
user = '$username' AND 
password = '$password'";

 -->






