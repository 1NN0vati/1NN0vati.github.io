<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["customer_name"];
    $email = $_POST["customer_email"];
    $subject = $_POST["subject"];
    $message = $_POST["customer_message"];

    $to = "tiasociation@gmail.com";  // Replace with your email address
    $headers = "From: $email\r\n";

    mail($to, $subject, $message, $headers);

    echo "Your message has been sent. Thank you!";
}
?>
