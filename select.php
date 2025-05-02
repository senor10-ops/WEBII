<?php
include "databaseconnection.php";
$sql = "SELECT id,user FROM users";

$result = mysqli_query($conn, $sql);
  if(mysqli_fetch_rows > 0){
    while($row = mysqli_fetch_assoc($result)){
        echo "id: " . $row["id"]. " - Name: " . $row["user"]. "<br>";
    }

  }
else{
    echo "0 results";
  }
  mysqi_close($conn);

?>
