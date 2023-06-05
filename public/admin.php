<?php

define('PL3XMAP', true);

require_once(__DIR__ . '/php/login.php');

if (!$logged_in) {
  header('location: /');
  die();
}

require_once(__DIR__ . '/php/header.php');

$og['title'] .= ' - Admin';

printHeader($logged_in, $og, $meta);

echo '$url = ' . @$_GET['url'];

printFooter($logged_in, $origin_encoded);

echo  "\n" . '  <script>';
ob_start('minify_js');
echo 'setTimeout(() => go(window.location.pathname.split(\'/admin/\')[1], \'admin\'), 0);';
echo 'const logged_in = ' . ($logged_in ? 'true' : 'false') . ';';
require_once(__DIR__ . '/admin.js');
require_once(__DIR__ . '/common.js');
ob_end_flush();
echo '</script>' . "\n";
?>
</body>
</html>
