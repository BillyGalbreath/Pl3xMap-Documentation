<?php

define('PL3XMAP', true);

require_once(__DIR__ . '/php/setup.php');

if (!$logged_in) {
  header('location: /');
  die();
}

$og['title'] .= ' - Admin';

require_once(__DIR__ . '/php/header.php');

echo '$url = ' . @$_GET['url'];

require_once(__DIR__ . '/php/footer.php');

echo  "\n" . '  <script>';
ob_start('minify_js');
echo 'setTimeout(() => go(window.location.pathname.split(\'/admin/\')[1], \'admin\'), 0);';
echo 'const logged_in = ' . ($logged_in ? 'true' : 'false') . ';';
require_once(__DIR__ . '/js/admin.js');
require_once(__DIR__ . '/js/common.js');
ob_end_flush();
echo '</script>' . "\n";
?>
</body>
</html>
