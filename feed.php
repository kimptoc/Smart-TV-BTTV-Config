<?php header('Access-Control-Allow-Origin: *') ?>
<?php echo file_get_contents("http://feeds.feedburner.com/" . $_GET["name"]); ?>