<?php
     $name = $_POST['name'];
     $visitor_email = $_POST['email'];
     $message = $_POST['message'];

     $email_form = 'ludocius@yahoo.com';

     $email_subject = "New Form Submissions";

     $email_body = "User Name: $name. \n".
                   "User Email: visitor_email.n".
                   "User Message: $messasge. \n"
                   
                   
  $to = "nicolasgondwe64@gmail.com";

  $headers = "from: $email_from \r\n";

  $headers .= "Reply-To: $visitor_email \r\n";

  mail($to,$email_subject,$email_body,$headers);

  header("location: contact.html");