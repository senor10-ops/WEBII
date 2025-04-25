<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>

<?php
   $name = "BCA STUDENTS";
   function sayhello() {
    GLOBAL $name;
      echo "Hello " . $name;
   }
   sayhello();
?>