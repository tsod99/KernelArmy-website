<?php
        header('Content-type: application/xml');

        require __DIR__ . "/includes/conn.php";
 
        // configuration
        $url_prefix = 'http://k3rn3l4rmy.com/';
 
        $writeups = getAllWriteupsFromDB();
 
        $output = '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
        $output .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . "\n";
        echo $output;
?>
<url>
        <loc><?php print $url_prefix ?></loc>
</url>
<url>
        <loc><?php print $url_prefix . "writeups/" ?></loc>
        <changefreq>weekly</changefreq>
</url>
<?php for($i = 0; $i < count($writeups); $i++) { ?>
<url>
        <loc><?php print $url_prefix . "writeup?id=" . $writeups[$i]['id'] ?></loc>
</url>
<?php } ?>
</urlset>

