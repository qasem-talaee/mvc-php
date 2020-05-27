<?php
include('core/send_email.php');
if(isset($_POST['submit'])){
    $to = 'Email Address';
    $subject = 'no subject';
    //you can send HTML message
    $message = 'hello';
    $from = $reply_to = 'example@gmail.com';
    send_email($to, 'john', $subject, $message, $from, 'qasem', $reply_to, 'qasem');
}

include('view/other_pages/email.php');
?>