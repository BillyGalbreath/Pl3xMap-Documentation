<?php

define('PL3XMAP', true);

require_once(__DIR__ . '/php/setup.php');

if (!$logged_in) {
  header('location: /');
  die();
}

$isAdmin = true;
$og['title'] .= ' - Admin';

require_once(__DIR__ . '/php/header.php');
?>
      <dialog id="d0"></dialog>
      <div class="content">
        <div class="buttons"><button class="addBtn"><svg viewBox="0 0 1024 1024"><path d="M467.627 468H235.489c-24.3 0-44 19.7-44 44s19.7 44 44 44h232.138v232.138c0 24.3 19.7 44 44 44s44-19.7 44-44V556h232.138c24.3 0 44-19.7 44-44s-19.7-44-44-44H555.627V235.862c0-24.3-19.7-44-44-44s-44 19.7-44 44V468zM512 1024C229.23 1024 0 794.77 0 512S229.23 0 512 0s512 229.23 512 512-229.23 512-512 512z"/></svg><span>Add New</span></button></div>
<?php
echo '        <ul>' . "\n";
foreach ($sections as $section) {
?>
          <li class="page_entry" id="<?=$section['slug']?>">
            <div><svg viewBox="0 0 24 24"><path d="M3 15h18M3 9h18" stroke="#000" stroke-width="2" stroke-linecap="round"/></svg></div>
            <div><?=$section['slug']?></div>
            <div><?=$section['title']?></div>
            <div><?=$section['description']?></div>
          </li>
<?php
}
echo '        </ul>' . "\n";
echo '      </div>' . "\n";

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
