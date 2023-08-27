<?php
    $visitor_email = $_POST['email'];

    $email_from = "Luggagelux@gmail.com";
    $email_subject = "New Form Submission";
    $email_body = "Email: $visitor_email";
    
    $to = "luggagelux@gmail.com";
    $headers = "From: $email_from \r\n";
    $headers .= "Reply-To: $visitor_email \r\n";

    mail($to, $email_subject, $email_body, $headers);
    header("Location: index.html");
?>
