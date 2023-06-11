<?php

define('PL3XMAP', true);

$isAdmin = false;
require_once(__DIR__ . '/php/setup.php');

$url = @$_GET['url'];
if (isset($url)) {
  foreach($sections as $section) {
    if ($section['slug'] !== $url) {
        continue;
    }
    $title = $section['title'];
    if (str_contains($title, '/')) {
      $parts = explode('/', $title);
      $title = $parts[0] . ' - ' . $parts[1];
    }
    $og['title'] .= ' - ' . $title;
    $og['url'] .= $section['slug'];
    $og['image'] = $origin . '/images/og_small.png';
    $og['large_image'] = false;
    $og['desc'] = $section['description'];
    break;
  }
}

require_once(__DIR__ . '/php/header.php');
require_once(__DIR__ . '/php/navigation.php');

echo '      <div class="content">' . "\n";
foreach ($sections as $section) {
  echo '        <section id="' . $section['slug'] . '"><h2>' . $section['title'] . '</h2><hr class="short"><div>' . $section['content'] . '</div></section>' . "\n";
}
echo '      </div>' . "\n";

require_once(__DIR__ . '/php/footer.php');
?>
  <script><?php
ob_start('minify_js');
?>
setTimeout(() => go(window.location.pathname.substring(1)), 0);
const logged_in = <?=$logged_in ? 'true' : 'false'?>;
const title = '<?=$meta['title']?>';
<?php
require_once(__DIR__ . '/js/index.js');
require_once(__DIR__ . '/js/common.js');
require_once(__DIR__ . '/prism/components/prism-core.min.js');
require_once(__DIR__ . '/prism/components/prism-css.min.js');
require_once(__DIR__ . '/prism/components/prism-yaml.min.js');
//require_once(__DIR__ . '/prism/plugins/prism-autoloader.min.js');
require_once(__DIR__ . '/prism/plugins/prism-line-numbers.min.js');
ob_end_flush();
?></script>
</body>
</html>
