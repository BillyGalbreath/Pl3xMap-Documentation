<?php
define('PL3XMAP', true);

require_once(__DIR__ . '/php/origin.php');
require_once(__DIR__ . '/php/db.php');
require_once(__DIR__ . '/php/login.php');

$og_title = 'Pl3xMap';
$og_url = $origin . '/';
$og_image = $origin . '/images/og_large.png';
$og_large_image = true;
$og_desc = 'Pl3xMap is a minimalistic and lightweight world map viewer for Minecraft servers using the vanilla Minecraft rendering style';
$og_keywords = 'Minecraft, Mod, Plugin, Map, Pl3x, Pl3xMap, Dynamic, Live, LiveMap, BlueMap, Dynmap, SquareMap, Bukkit, BukkitMC, Spigot, SpigotMC, Paper, PaperMC, Purpur, PurpurMC, Fabric, FabricMC, Forge, ForgeMC, Quilt, QuiltMC';

$sections = getSections();

$id = @$_GET['id'];
if (isset($id)) {
  foreach($sections as $section) {
    if ($section['slug'] !== $id) {
        continue;
    }
    $title = $section['title'];
    if (str_contains($title, '/')) {
      $parts = explode('/', $title);
      $title = $parts[0] . ' - ' . $parts[1];
    }
    $og_title .= ' - ' . $title;
    $og_url .= $section['slug'];
    $og_image = $origin . '/images/og_small.png';
    $og_large_image = false;
    $og_desc = $section['description'];
    break;
  }
}
function minify_css($css) {
  $css = preg_replace('!/\*[^*]*\*+([^/][^*]*\*+)*/!', '', $css);
  $css = preg_replace('/\s*([{}|:;,])\s+/', '$1', $css);
  $css = str_replace(array("\r\n", "\r", "\n", "\t", '  ', '    ', '    '), '',$css);
  return $css;
}
function minify_js($js) {
  require_once(__DIR__ . '/php/Minifier.php');
  return Minifier::minify($js);
}
?><!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title><?=$og_title?></title>
  <meta name="author" content="William Blake Galbreath">
  <meta name="description" content="<?=$og_desc?>">
  <meta name="keywords" content="<?=$og_keywords?>">
  <meta property="og:url" content="<?=$og_url?>">
  <meta property="og:type" content="website">
  <meta property="og:title" content="<?=$og_title?>">
  <meta property="og:description" content="<?=$og_desc?>">
  <?php if (isset($og_image)) { echo "<meta property=\"og:image\" content=\"" . $og_image . "\">\n"; } ?>
  <?php if ($og_large_image) { echo "<meta name=\"twitter:card\" content=\"summary_large_image\">\n"; } ?>
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
  <meta name="theme-color" content="#222222">
  <meta name="darkreader-lock" content="true">
  <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" sizes="16x16 32x32 48x48" crossOrigin="anonymous">
  <style><?php ob_start('minify_css');require_once(__DIR__ . '/index.css');ob_end_flush(); ?></style>
</head>
<body>
  <button onclick="go()" id="topBtn" title="Go to top"><svg width="32" height="38" viewBox="0 0 24 24" fill="none" stroke="#000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="18 15 12 9 6 15"/></svg></button>
  <?php if (isset($error)) echo "<p id=\"err\">" . $error . "</p>"; ?>
  <div class="wrapper">
    <header>
      <h1>Pl3xMap Documentation</h1>
      <p>Minimalistic and lightweight world map viewer for<br>Minecraft servers using the vanilla rendering style</p>
<?php if ($logged_in) { ?>
      <p><?=$_SESSION['username']?></p>
<?php } ?>
      <hr>
    </header>
    <div class="inner">
      <nav class="docs-sidebar" data-spy="affix" data-offset-top="300" data-offset-bottom="200"><?php
$first = true;
$subcat = false;
echo "<ul class=\"nav\">";
foreach ($sections as $section) {
  if (empty($section['slug'])) {
    continue;
  }
  if (str_contains($section['slug'], '/')) {
    if (!$subcat) {
      $subcat = true;
      echo "<ul class=\"nav\">";
    }
    echo "<li><a href=\"/" . $section['slug'] . "\">" . $section['title'] . "</a></li>";
  } else {
    if ($subcat) {
      $subcat = false;
      echo "</ul>";
    }
    if (!$first) {
      echo "</li>";
    }
    echo "<li><a href=\"/" . $section['slug'] . "\">" . $section['title'] . "</a>";
    $first = false;
  }
}
if ($subcat) {
  $subcat = false;
  echo "</ul></li>";
}
echo "</ul>";
?></nav>
      <div class="content">
<?php
foreach ($sections as $section) {
  $slug = !empty($section['slug']) ? ' id="' . $section['slug'] . '"' : '';
  echo "<section" . $slug . "><h2>" . $section['title'] . "</h2><hr class=\"short\"><div>" . $section['content'] . "</div></section>\n";
}
?>
      </div>
    </div>
  </div>
  <footer>
    <p>
      <a href="https://html5.validator.nu/?doc=<?=urlencode($origin)?>" target="_blank"><img src="/images/valid_html5.webp" title="Valid HTML 5" alt="Valid HTML 5"></a>
      <a href="https://jigsaw.w3.org/css-validator/validator?uri=<?=urlencode($origin)?>" target="_blank"><img src="/images/valid_css3.webp" title="Valid CSS 3" alt="Valid CSS 3"></a>
      <a href="https://html5.validator.nu/?doc=<?=urlencode($origin)?>" target="_blank"><img src="/images/valid_svg11.webp" title="Valid SVG 1.1" alt="Valid SVG 1.1"></a>
    </p>
    <p>Copyright &copy; 2020-2023 William Blake Galbreath</p>
  </footer>
<?php if ($logged_in) { ?>
  <div id="pi">X<form method="post" action="/"><input type="text" name="logout" hidden><input type="submit" hidden></form></div>
<?php } else { ?>
  <div id="pi">&pi;</div>
  <dialog id="d1"><form method="post" action="/"><input type="text" name="username"><br><input type="password" name="password"><input type="submit" hidden></form></dialog>
  <dialog id="d2"><form method="post" action="/"><input type="text" name="username"><br><input type="password" name="password"><br><input type="password" name="repeat"><input type="submit" hidden></form></dialog>
<?php } ?>
  <script><?php ob_start('minify_js');require_once(__DIR__ . '/index.js'); ?>
document.querySelector('#pi').onclick = (e) => {
<?php if ($logged_in) { ?>
  document.querySelector('#pi form').submit()
<?php } else { ?>
  if (modal(e)) document.querySelector(which(e)).showModal()
<?php } ?>
}
<?php ob_end_flush(); ?></script>
</body>
</html>
