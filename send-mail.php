<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collecting form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    
    // Destination email
    $to = 'saepudina808h@gmail.com';
    
    // Email headers
    $headers = "From: " . $email . "\r\n";
    $headers .= "Reply-To: " . $email . "\r\n";
    $headers .= "Content-type: text/html\r\n";
    
    // Message body
    $emailBody = "<h2>Message from $name</h2>";
    $emailBody .= "<p><strong>Email: </strong> $email</p>";
    $emailBody .= "<p><strong>Subject: </strong> $subject</p>";
    $emailBody .= "<p><strong>Message: </strong><br>$message</p>";
    
    // Sending email
    if (mail($to, $subject, $emailBody, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Failed to send message.";
    }
}
?>
