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

  //Email Template. Send if no errors.
  if (!isset($errors)) {
    $eol = "\r\n";
    $to = "jonathanedempsey@gmail.com";
    $subject = "JD Website Form Submission";
    $message .= "Submission Details:\n";
    $message .= "\n";
    $message .= "Name: " . $name . "\n";
    $message .= "Email: " . $email . "\n";
    $message .= "Message: " . $userMessage . "\n";

    $body .= $message . $eol;

    mail($to,$subject,$body,$headers);
    echo $message;
  }
  else if ($errors) {
    echo "Uh oh, looks like something isn't quite right...";
    echo '<div style="color: red">' . $errors . '<br/></div>';
  }
}
