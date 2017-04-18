<?php
if (isset($_REQUEST['send_mail'])) {
    $contact_info = $_REQUEST;
    extract($contact_info);
    $to = $user_email;
    $from = "mamun@ergo-ventures.com";
    $subject = $user_subject;
    $message = $user_message;
    $headers = "From: " . $from . "r\n";
    $headers.="Reply: maamunrcd@gmail.com" . "r\n";
    $headers = "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
    $headers .= "Content-Transfer-Encoding: 7bit\r\n";
    $mailsent =mail($to, $subject, $message, $headers);
    if ($mailsent) {
        echo "Mail Send";
    } else {
        echo "There was an error...";
    }
}
