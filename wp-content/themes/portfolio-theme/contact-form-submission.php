<?php

if (isset($_POST['submit'])) {
  // Form input validation.
  $name = trim(filter_input(INPUT_POST, "name", FILTER_SANITIZE_STRING));
  $email = trim(filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL));
  $userMessage = trim(filter_input(INPUT_POST, "message", FILTER_SANITIZE_STRING));

  // If inputs are empty, fill the $error var with an error message.
  if($name == "") {
    $errors .= "Please fill in your name.";
  }
  if($email == "") {
    $errors .= "Please fill in your email.";
  }
  // Honeypot
  if (!isset($errors) && $_POST["address"] != "") {
    $errors .= "Bad form input.";
  }

  $to = "jonathanedempsey@gmail.com, admin@jonathandempsey.ie";
  $subject = "HTML email";

  $message = "
  <html>
  <head>
  <title>HTML email</title>
  </head>
  <body>
  <p>This email contains HTML Tags!</p>
  <table>
  <tr>
  <th>Firstname</th>
  <th>Lastname</th>
  </tr>
  <tr>
  <td>John</td>
  <td>Doe</td>
  </tr>
  </table>
  </body>
  </html>
  ";

  // Always set content-type when sending HTML email
  $headers = "MIME-Version: 1.0" . "\r\n";
  $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

  // More headers
  $headers .= 'From: <webmaster@example.com>' . "\r\n";
  $headers .= 'Cc: myboss@example.com' . "\r\n";

  mail($to,$subject,$message,$headers);
}
