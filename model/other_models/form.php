<?php
include('core/form_valid.php');
global $name, $email, $flag;
if(isset($_POST['submit'])){
    $name = form_valid($_POST['name'], 'text', 0);
    $email = form_valid($_POST['email'], 'email', 1);
    if($email[0] == 0 or $name[0] ==0){
        $flag = 0;
    }else{
        $flag = 1;
    }
}
include('view/other_pages/form.php');
?>