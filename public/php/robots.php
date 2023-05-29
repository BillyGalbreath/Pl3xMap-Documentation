<?php

define('PL3XMAP', true);

require_once(__DIR__ . '/origin.php');

header('Content-Type:text/plain');

echo 'User-agent: *' . "\n";
echo 'Allow: /' . "\n";
echo "\n";
echo 'Sitemap: ' . $origin . '/sitemap.xml' . "\n";
