<?php
include ("connect.php");

$username = "hari";
$password = "1234";

$sql = "INSERT INTO users (user,password)
                VALUES ('$username', '$password')";

try{
    mysqli_query($conn, $sql);
    echo"user is now registered";

}
catch(mysqli_sql_excpetion){
    echo " could not register";
}

mysqli_close($conn);

?>
