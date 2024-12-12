<?php
    // session_start();
    // My modifications to mailer script from:
    // http://blog.teamtreehouse.com/create-ajax-contact-form
    // Added input sanitizing to prevent injection
   // var_dump($_POST);
   
    // Only process POST reqeusts.
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the form fields and remove whitespace.
        $name = strip_tags(trim($_POST["name"]));
        $telephone = strip_tags(trim($_POST["tel"]));
		$name = str_replace(array("\r","\n"),array(" "," "),$name);
        $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
        // $cont_subject = trim($_POST["subject"]);
        $message = trim($_POST["message"]);

        // Check that data was sent to the mailer.
        if ( empty($name) OR empty($message) OR !filter_var($email, FILTER_VALIDATE_EMAIL) OR empty($telephone)) {
            // Set a 400 (bad request) response code and exit.
            http_response_code(400);
            echo "Oops! There was a problem with your submission. Please complete the form and try again.";
            exit;
        }
        if (!preg_match('/^\+?[0-9]+$/', $telephone)) {
            http_response_code(400);
            echo "Le numéro de téléphone n'est pas valide.";
            exit;
        }
        // Set the recipient email address.
        // FIXME: Update this to your desired email address. 
        // $recipient = "contact@markups.io";
        $recipient = $_SESSION['email_website'];

        // Set the email subject.
        $subject = "New contact from $name";

        // Build the email content.
        $email_content = "Name: $name\n";
        $email_content .= "Email: $email\n\n";
        // $email_content .= "Subject: $cont_subject\n";
        $email_content .= "Message:\n$message\n";
        $email_content .= "Téléphone:\n$telephone\n";

        // Build the email headers.   $bcc = 'email.notifications@1pub.net,1pubagency@gmail.com,info@akila.blog';

        // sender_mail($name_sender, $email_sender, $sujet, $message, $destination, $cc, $bcc);
        
        // $email_headers = "From: $name <$email>";
        // $email_headers = "From: Akila Web Factory <info@akila.blog> ";
        
        $email_headers = "From: $name <$email>\r\n";
        $email_headers .= "Reply-To: $email\r\n";
        $email_headers .= "BCC: email.notifications@1pub.net,1pubagency@gmail.com,info@akila.blog\r\n";
        $email_headers .= "MIME-Version: 1.0\r\n";
        $email_headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

        // Send the email.'info@akila.blog
        if (mail('joelhapi6@gmail.com', $subject, $email_content, $email_headers)) {
            http_response_code(200);
            header("location:../keedi-logistics");
            //echo "Merci d'avoir répondu. Votre message a été envoyé..";
        } else {
            http_response_code(500);
            echo "Oops! Something went wrong and we couldn't send your message. Please try again later.";
            error_log("Failed to send email. Subject: $subject, Recipient: info@akila.blog");  // Optionnel pour loguer l'erreur
        }
       

    } else {
        // Not a POST request, set a 403 (forbidden) response code.
        http_response_code(403);
        echo "There was a problem with your submission, please try again.";
    }
 
/*
if(isset($_POST['submit'])){
$nom= test_input($_POST['name']);
$email=test_input($_POST['email']);
$tel = test_input($_POST['tel']);
$message=test_input($_POST['message']);
if(!empty($nom) && !empty($email) && !empty($tel) && !empty($message)){  
    $DB->query("INSERT INTO contact (NomContact, EmailContact, TelephoneContact, MessageContact)
    VALUES(:NomContact, :EmailContact, :TelephoneContact, :MessageContact)",
        [
            'NomContact'=>$nom,
            'EmailContact'=>$email,
            'TelephoneContact'=>$tel,
            'MessageContact'=>$message 
        ]
    );
   header("location:../keedi-logistics");
}
}
*/
?>