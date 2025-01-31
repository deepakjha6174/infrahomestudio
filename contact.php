<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = htmlspecialchars($_POST['name']);
  $email = htmlspecialchars($_POST['email']);
  $message = htmlspecialchars($_POST['message']);

  // Send email or save to database
  $to = "your-email@example.com";
  $subject = "New Contact Form Submission";
  $body = "Name: $name\nEmail: $email\nMessage: $message";
  $headers = "From: $email";

  if (mail($to, $subject, $body, $headers)) {
    echo "<p>Thank you for contacting us, $name! We will get back to you soon.</p>";
  } else {
    echo "<p>Sorry, something went wrong. Please try again later.</p>";
  }
}
?>