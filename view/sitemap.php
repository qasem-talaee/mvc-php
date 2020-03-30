<?php
header("Content-Type: text/xml;charset=iso-8859-1");
?>
<?xml version="1.0" encoding="utf-8"?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    <url>
        <loc><?php echo($base_url); ?></loc>
        <lastmod><?php echo(date('Y')); ?></lastmod>
        <changefreq>daily</changefreq>
        <priority>0.8</priority>
    </url>
</urlset>