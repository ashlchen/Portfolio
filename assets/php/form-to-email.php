<?php
  $name = $_POST['name'];
  $visitor_email = $_POST['email'];
  $message = $_POST['message'];

  $email_from = "hsiaoyuan0902@gmail.com";

  $email_subject = "New Form submission";

  $email_body = "You have received a new message from the user $name.\n". "Here is the message:\n $message".

  $to = "hsiaoyuan0902@gmail.com";

  $headers = "From: $visitor_email \r\n";

  $headers .= "Reply-To: $visitor_email \r\n";

  mail($to,$email_subject,$email_body,$headers);

?>