<?php

if($_POST) {
  $to = "eduardo.medina.ventas@mechanical.com.mx"; // your mail here
  $name = filter_var($_POST["name"], FILTER_SANITIZE_STRING);
  $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
  $subject = filter_var($_POST["subject"], FILTER_SANITIZE_STRING);
  $message = filter_var($_POST["message"], FILTER_SANITIZE_STRING);
  $body .= "Visitor Name: $name\nVisitor E-mail: $email\nReason for contacting us: $subject\nMessage: $message";
  
  if(@mail($to, $subject, $body, $name)) {
    $output = json_encode(array('success' => true));
    die($output);
  } else {
    $output = json_encode(array('success' => false));
    die($output);
  }
}