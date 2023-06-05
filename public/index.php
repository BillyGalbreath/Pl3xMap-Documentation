<?php

define('PL3XMAP', true);

require_once(__DIR__ . '/php/header.php');

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

printHeader($logged_in, $og, $meta);
?>
      <nav class="docs-sidebar"><ul class="nav"><?php
$li = false;
$subnav = false;
foreach ($sections as $section) {
  if ($section['slug'] === 'introduction') {
    continue;
  }
  if (str_contains($section['slug'], '/')) {
    if (!$subnav) {
      $subnav = true;
      echo '<ul class="subnav">';
    }
    echo '<li><a href="/' . $section['slug'] . '">' . $section['title'] . '</a></li>';
  } else {
    if ($subnav) {
      $subnav = false;
      echo '</ul>';
    }
    if ($li) {
      echo '</li>';
    }
    echo '<li><a href="/' . $section['slug'] . '">' . $section['title'] . '</a>';
    $li = true;
  }
}
if ($subnav) {
  echo '</ul></li>';
}
?></ul></nav>
      <div class="content">
<?php
foreach ($sections as $section) {
  echo '        <section id="' . $section['slug'] . '"><h2>' . $section['title'] . '</h2><hr class="short"><div>' . $section['content'] . "</div></section>\n";
}
echo '      </div>' . "\n";
if (!$logged_in) {
?>
      <dialog id="d1"><form method="post" action="/"><input type="text" name="username" autocomplete="off"><br><input type="password" name="password" autocomplete="off"><input type="submit" hidden></form></dialog>
      <dialog id="d2"><form method="post" action="/"><input type="text" name="username" autocomplete="off"><br><input type="password" name="password" autocomplete="off"><br><input type="password" name="repeat" autocomplete="off"><input type="submit" hidden></form></dialog>
<?php
}

printFooter($logged_in, $origin_encoded);

echo  "\n" . '  <script>';

ob_start('minify_js');
echo 'setTimeout(() => go(window.location.pathname.substring(1)), 0);';
echo 'const logged_in = ' . ($logged_in ? 'true' : 'false') . ';';
require_once(__DIR__ . '/js/index.js');
require_once(__DIR__ . '/js/common.js');
require_once(__DIR__ . '/prism/components/prism-core.min.js');
require_once(__DIR__ . '/prism/components/prism-css.min.js');
//require_once(__DIR__ . '/prism/plugins/prism-autoloader.min.js');
require_once(__DIR__ . '/prism/plugins/prism-line-numbers.min.js');
ob_end_flush();

echo '</script>' . "\n";
?>
</body>
</html>
