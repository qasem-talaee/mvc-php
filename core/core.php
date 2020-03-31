<?php
#---- Base Url ----#
$base_url = "/mvc/";

#---- Database ----#
$db_host = 'localhost';
$db_username = 'root';
$db_password = '';
$db_name = '';
$con = mysqli_connect($db_host, $db_username, $db_password, $db_name);
mysqli_set_charset($con,'utf8');

#---- Cache settings ----#
$cache_time_expired = 1 * 60; #one minute
$cache_sub_folder = explode('/', $_SERVER['REQUEST_URI'])[2];
$cache_folder = "cache/".$cache_sub_folder;
if(!is_dir($cache_folder)){
    mkdir($cache_folder);
}
if(! strstr($cache_sub_folder, "sitemap.xml")){
    $cache_file = $cache_folder."/".md5($_SERVER['REQUEST_URI']).".html";
    if(file_exists($cache_file) && (time()-$cache_time_expired < filemtime($cache_file))){
        include($cache_file);
        exit;
    }else{
        ob_start();

        #---- Include controller file ----#
        include('controller/controller.php');

        $fp = fopen($cache_file, 'w');
        fwrite($fp, ob_get_contents());
        fclose($fp);
        ob_end_flush();
    }
}else{

    #---- Include controller file ----#
    include('controller/controller.php');
}
?>