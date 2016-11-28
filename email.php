<?php

if (isset($_POST['email'])) {
    require __DIR__ . '/swiftmailer/swift_required.php';

    //==== START EDIT
    $email_to_address = "jaysmit158@gmail.com"; 
    $email_from_address = "jordan@jsmithwebdev.com";
    $email_from_name = "Jsmith Web Dev Inquiry";
    $email_subject = "Message from Jsmith Web Dev Inquiry";
    //==== END EDIT

    function died($error)
    {
        echo "We are very sorry, but there were error(s) found with the form you
           submitted. ";
        echo "These errors appear below.<br /><br />";
        echo $error . "<br /><br />";
        echo "Please go back and fix these errors.<br /><br />";
        die();
    }

    // Validation expected data exists
    if (!isset($_POST['name']) ||
        !isset($_POST['email']) ||
        !isset($_POST['message'])
    ) {
        died('We are sorry, but there appears to be a problem with the form you
        submitted.');
    }

    // Get user input
    $name = $_POST['name']; // required
    $email = $_POST['email']; // required
    $phone = $_POST['phone']; // required
    $message = $_POST['message']; // required

    $error_message = "";

    // Validate user name
    $string_exp = "/^[A-Za-z0-9 .'-]+$/";
    if (!preg_match($string_exp, $name)) {
        $error_message .= 'The  Name you entered does not appear to be valid.<br />';
    }

    // Validate user email
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
    if (!preg_match($email_exp, $email)) {
        $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
    }

    // Quit on error
    if (strlen($error_message) > 0) {
        died($error_message);
    }

    // Create the Transport
    $transport = \Swift_SmtpTransport::newInstance('smtp.sendgrid.net', 587)
        ->setUsername('jaysmit158')
        ->setPassword('gamester2');

    // Create the Mailer using your created Transport
    $mailer = \Swift_Mailer::newInstance($transport);

    // Create a message
    $message = \Swift_Message::newInstance($email_subject)
        ->setFrom([$email_from_address => $email_from_name])
        ->setTo([$email_to_address])
        ->setBody("Inquiry from Website:\n\n\tName: {$name}\n\tEmail: {$email}\n\tMessage: {$message}\n");

    // Send the message
    $result = $mailer->send($message);

    // Redirect user request
    header("Location:index.html");
}
