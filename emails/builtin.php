<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

$to = "ashwin.blacktech@gmail.com";
$from = "poudelaswin942@gmail.com"; // This should be a valid email address (e.g., someone@example.com)
$subject = "Checking PHP mail";
$message = "PHP mail works just fine";
$headers = "From: " . $from;

if (mail($to, $subject, $message, $headers)) {
    echo "The email message was sent.";
} else {
    echo "The email message was not sent.<br>";
    $error = error_get_last();
    if ($error) {
        echo "Error: " . $error['message'];
    } else {
        echo "No additional error info is available.";
    }
}
?>
