<?php
include('core/send_email.php');
if(isset($_POST['submit'])){
    $to = 'qasem.talaee1375@gmail.com';
    $subject = 'no subject';
    $message = 'hello';
    $from = $reply_to = 'example@gmail.com';
    send_email($to, $subject, $message, $from, $reply_to);
}

include('view/other_pages/email.php');
?>