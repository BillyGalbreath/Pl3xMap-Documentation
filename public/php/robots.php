<?php

header('Content-Type:text/plain');

include('origin.php');

echo "User-agent: *\n";
echo "Allow: /\n";
echo "\n";
echo "Sitemap: " . $origin . "/sitemap.xml\n";
