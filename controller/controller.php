<?php
#---- Get Url ----#
$url = test_input($_SERVER['REQUEST_URI']);
$url = str_replace($base_url, '', $url);

#---- Get data from url ----#
$explode_url = explode('/', $url);
if(count($explode_url) > 1){
    for($i=1; $i<count($explode_url); $i++){
        $data[$i-1] = $explode_url[$i];
    }
}

#----Manage Urls ----#
#Index page
if($url == ''){
    include('model/index.php');
}
#Sitemap page
elseif($explode_url[0] == 'sitemap.xml'){
    include('model/sitemap.php');
}
#Othe pages
elseif($explode_url[0] == 'welcome'){
    include('model/other_models/welcome.php');
}
elseif($explode_url[0] == 'form'){
    include('model/other_models/form.php');
}
elseif($explode_url[0] == 'image_upload'){
    include('model/other_models/image.php');
}
elseif($explode_url[0] == 'email'){
    include('model/other_models/email.php');
}
#404 page
else{
    include('model/404.php');
}
?>