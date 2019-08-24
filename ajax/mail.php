<?php
  $email = $_POST['email'];
  $name = $_POST['name'];
  $phone = $_POST['phone'];
  $message = $_POST['message'];

  $to = 'ivanigorolenyk@gmail.com';
  $subject = 'Сообщения с сайта';

  $headers = "From: $email\r\nReply-to: $email\n\rContent: text/html; charset=utf-8\r\n";
  $success  = mail ($to, $subject, $message, $headers);
  echo $success;
?>
