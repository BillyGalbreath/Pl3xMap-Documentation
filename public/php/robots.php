<?php

header('Content-Type:text/plain');

require_once(__DIR__ . '/origin.php');

echo "User-agent: *\n";
echo "Allow: /\n";
echo "\n";
echo "Sitemap: " . $origin . "/sitemap.xml\n";
