<?php
// Get the form data
$name = $_POST['contact-name'];
$email = $_POST['contact-email'];
$subject = $_POST['subject'];
$message = $_POST['contact-message'];

// Create the email message
$body = "Name: {$name}\nEmail: {$email}\nSubject: {$subject}\nMessage: {$message}";

// Set the email headers
$headers = "From: {$email}\nReply-To: {$email}\nContent-Type: text/plain";

// Send the email
mail('adefokunadeoluwaisrael@gmail.com', $subject, $body, $headers);

// Return a JSON response
echo json_encode(['success' => true]);
