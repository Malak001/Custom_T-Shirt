<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $to = "malakzaky3@gmail.com";
  $name = $_POST["name"];
  $email = $_POST["email"];
  $message = $_POST["message"];
  $subject = "New contact message from $name";

  $headers = "From: $email\r\n";
  $headers .= "Reply-To: $email\r\n";
  mail($to, $subject, $message, $headers);
}
