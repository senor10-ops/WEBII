<!DOCTYPE html>
<html>
    <body>
        <form action="" method="post" enctype="multipart/form-data">
            <input type="file" name="myfile">
            <input type="submit" name="submit">
        </form>
    </body>
</html>

<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['myfile'])) {
    
    $filesname = $_FILES['myfile']['name']; //gets the original name of the file that the user uploaded and stores it in the variable $filesname.
    $tempname = $_FILES['myfile']['tmp_name'];
    $size = $_FILES['myfile']['size'];
    $target_dir = "testing/";
    // $uploadOk = 1;


    if (move_uploaded_file($tempname, $target_dir . $filesname)) {
        echo "File uploaded successfully<br>";
    } else {
        echo "File upload failed<br>";
    }

    // Check if the file is a valid image type
    $ext = pathinfo($filesname, PATHINFO_EXTENSION);
    if ($ext == "png" || $ext == "jpg") {
        echo "File is a valid image<br>";
    } else {
        echo "File is not a valid image<br>";
    }

    // Check file size
    if ($size < 2000000) {
        echo "File size is less than 2MB<br>";
    } else {
        echo "File size is greater than 2MB<br>";
    }

    //check if it accepted or not
    if ($_FILES["myfile"]["size"] > 500000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
      }

    // Check if the file already exists
    if (file_exists($target_dir . $filesname)) {
        echo "Sorry, file already exists.<br>";
        $uploadOk = 0;
    }


}


?> 