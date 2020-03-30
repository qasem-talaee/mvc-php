<h3>In this page, you can upload image and create thumbnail of it.</h3>
<form method="POST" enctype="multipart/form-data">
    <input type="file" name="file">
    <input type="submit" name="submit" value="upload">
</form>
<br>
<?php
if($flag == 0){
    echo('Please fill inputs or enter correct values.');
}
if($flag == 1){ ?>
    This is main image.<br>
    <img src="<?php echo($base_url.'view/image/'.$img[1]); ?>" width="70%">
    <br>And this is the thumbnail of image.<br>
    <img src="<?php echo($base_url.'view/image/thumbnail/'.$img[2]); ?>">
<?php }
?>

<br>
<ul>
    <li><a href="<?php echo($base_url) ?>">index</a></li>
    <li><a href="<?php echo($base_url) ?>welcome/John/">welcome</a></li>
    <li><a href="<?php echo($base_url) ?>form/">form</a></li>
    <li><a href="<?php echo($base_url) ?>image_upload/">image</a></li>
    <li><a href="<?php echo($base_url) ?>email/">email</a></li>
    <li><a href="<?php echo($base_url) ?>sitemap.xml">sitemap.xml</a></li>
</ul>