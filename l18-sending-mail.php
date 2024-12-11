<?php
// Sending mail
if (isset($_POST['sendMail'])) {
    $to = "asif.abir@hotmail.com";
    $subject = "Test mail";
    $message = "Hello! This is a simple email message.";
    $headers = "From: asif@dti.ac\r\n";
    $headers .= "Reply-To: asif@dti.ac\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
    if (mail($to, $subject, $message, $headers)) {
        echo "Mail sent successfully";
    } else {
        echo "Mail not sent";
    }
}

?>
<form action="" method="post">
    <input type="submit" values="Send Mail" name="sendMail">
</form>