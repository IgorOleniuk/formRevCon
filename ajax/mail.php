<?php
  $email = $_POST['email'];
  $name = $_POST['name'];
  $phone = $_POST['phone'];
  $message = $_POST['message'];


  $subject = 'Сообщения с сайта';
  $headers = "From: $email\r\nReply-to: $email\n\rContent: text/html; charset=utf-8\r\n";

  $success  = mail ('ivanigorolenyk@gmail.com', $subject, $message, $headers);
  echo $success;
?>
