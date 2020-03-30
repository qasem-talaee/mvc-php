<h3>In this page, you can validate a form.</h3>
<form method="POST">
    Name : <input type="text" name="name" value="<?php echo($name[1]); ?>">
    Email : <input type="text" name="email" value="<?php echo($email[1]); ?>">
    <input type="submit" name="submit" value="submit">
</form>
<br>
<?php
if($flag == 0){
    echo('Please fill inputs or enter correct values.');
}
if($flag == 1){
    echo('Everything is OK!');
}
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