<?php
include "databaseconnection.php";
// $sql = "SELECT id,user FROM users WHERE id >5";
// $sql = "SELECT *FROM users WHERE id >5"; 

// $sql = "SELECT *FROM users ORDERBY id DESC";
// $sql = "SELECTz
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result)> 0){
    while($row = mysqli_fetch_assoc($result)){
        echo "id: " . $row["id"]. " - Name: " . $row["user"]. "<br>";
    }

  }
else{
    echo "0 results";
  }
  mysqli_close($conn);

?>
