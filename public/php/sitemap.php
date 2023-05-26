<?php

header('Content-type: application/xml; charset=utf-8');

include('origin.php');

echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
echo "<urlset xmlns=\"http://www.sitemaps.org/schemas/sitemap/0.9\">\n";
echo "  <url><loc>" . $origin . "/</loc></url>\n";
echo "  <url><loc>" . $origin . "/getting-started</loc></url>\n";
echo "  <url><loc>" . $origin . "/how-to-install</loc></url>\n";
echo "</urlset>\n";
