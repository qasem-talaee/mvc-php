<?php
function send_email($to, $subject, $message ,$from, $reply_to){
    $headers = 'From: '.$from.'' . "\r\n" .
                'Reply-To: '.$reply_to.'' . "\r\n" .
                'X-Mailer: PHP/' . phpversion();
    mail($to, $subject, $message, $headers);
}
?>