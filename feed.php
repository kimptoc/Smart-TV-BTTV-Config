<?php header('Access-Control-Allow-Origin: *') ?>
<?php echo file_get_contents("http://www.britishtechnetwork.com/feed/" . urlencode($_GET["name"])); ?>