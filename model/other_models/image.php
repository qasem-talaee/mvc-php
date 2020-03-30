<?php
include('core/image_upload.php');
global $flag;
if(isset($_POST['submit'])){
    $img = image_upload_thumbnail('file', 'view/image/', 5000000, 'view/image/thumbnail/', 0.2);
    if($img[0] == 0){
        $flag = 0;
    }
    if($img[0] == 1){
        $flag = 1;
    }
}

include('view/other_pages/image.php');
?>