<?php
require('twip.php');
require('config.php');
$options['oauth_key'] = OAUTH_KEY;
$options['oauth_secret'] = OAUTH_SECRET;
$options['base_url'] = BASE_URL;
$twip = new twip($options);
?>
