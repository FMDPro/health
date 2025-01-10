<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $to = "draoliveira@icloud.com";
    $subject = "New Consultation Request";
    $message = "Name: $name\nEmail: $email";
    $headers = "From: no-reply@yourdomain.com";

    if (mail($to, $subject, $message, $headers)) {
        echo "Thank you for signing up! We will contact you soon.";
    } else {
        echo "There was an error sending your message. Please try again.";
    }
}
?>
