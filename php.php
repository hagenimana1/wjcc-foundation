<?php
$name=$_POST['name'];
$visitor_phone = $_POST['phone number'];
$visitor_reason= $_POST['reason'];
$message = $_POST['message'];
$visitor_email= $_POST['email'];
$email_form  = "donotreply@jwcc.com";
$email_subject = "new form submission";
$email_body = "you have received a new messagenfrom the user" . $name .
              "\r\n $visitor's phone:" . $visitor_phone number .
              "\r\n $visitor's reason:i" . $visitor_reason .
              "\r\n $visitor's message:" . $visitor_message;
              "\r\n $visitor's emal:i" . $visitor_email .

$to ="jwcc email";
$headers = "from: $email_form \r\n";

$sent1 = mail($to, $email_subject, $email_body, $headers);
$confirmation_subject="thanks for contacting us";
$confirmation_body = "hello $name,\n".
      "thank you for contacting us, we will be in touch shortly. do not reply to this email.";
      $sent2 = mail($visitor_email, $confirmation_subject, $confirmation_body, $headers);
      $nfirmation_subject = "thanks for contacting us";
