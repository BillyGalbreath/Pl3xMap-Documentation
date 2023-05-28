<?php

define('PL3XMAP', true);

require_once(__DIR__ . '/origin.php');
require_once(__DIR__ . '/db.php');

$sections = getSections();

header('Content-type: application/xml; charset=utf-8');

echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
echo "<urlset xmlns=\"http://www.sitemaps.org/schemas/sitemap/0.9\">\n";
echo "  <url><loc>" . $origin . "/</loc></url>\n";
foreach ($sections as $section) {
  if (!empty($section['slug'])) {
    echo "  <url><loc>" . $origin . "/" . $section['slug'] . "</loc></url>\n";
  }
}
echo "</urlset>\n";
