<?php

if (!defined('PL3XMAP')) {
  header('location: /');
  die();
}

require_once(__DIR__ . '/origin.php');
require_once(__DIR__ . '/db.php');
require_once(__DIR__ . '/login.php');

$sections = sql($conn, 'SELECT * FROM `content` ORDER BY `order` ASC;');

$meta = array();
foreach(sql($conn, 'SELECT * FROM `meta`;') as $pair) {
  $meta[$pair['key']] = $pair['value'];
}

$og['title'] = $meta['title'];
$og['url'] = $origin . '/';
$og['image'] = $origin . '/images/og_large.png';
$og['large_image'] = true;
$og['desc'] = str_replace('<br>', ' ', $meta['description']);
$og['keywords'] = $meta['keywords'];

function minify_css($css) {
  $css = preg_replace('!/\*[^*]*\*+([^/][^*]*\*+)*/!', '', $css);
  $css = preg_replace('/\s*([{}|:;,])\s+/', '$1', $css);
  $css = str_replace(array("\r\n", "\r", "\n", "\t", '  ', '    ', '    '), '',$css);
  return $css;
}

function minify_js($js) {
  require_once(__DIR__ . '/Minifier.php');
  return Minifier::minify($js);
}

function printHeader($logged_in, $og, $meta) {
?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title><?=$og['title']?></title>
  <meta name="author" content="William Blake Galbreath">
  <meta name="description" content="<?=$og['desc']?>">
  <meta name="keywords" content="<?=$og['keywords']?>">
  <meta property="og:url" content="<?=$og['url']?>">
  <meta property="og:type" content="website">
  <meta property="og:title" content="<?=$og['title']?>">
  <meta property="og:description" content="<?=$og['desc']?>">
<?php
  if (isset($og['image'])) {
    echo '  <meta property="og:image" content="' . $og['image'] . '">' . "\n";
  }
  if ($og['large_image']) {
    echo '  <meta name="twitter:card" content="summary_large_image">' . "\n";
  }
?>
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
  <meta name="theme-color" content="#222222">
  <meta name="darkreader-lock" content="true">
  <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" sizes="16x16 32x32 48x48" crossOrigin="anonymous">
  <style><?php
ob_start('minify_css');
require_once(__DIR__ . '/../css/index.css');
if ($logged_in) echo 'nav .nav .subnav {display: block !important;}';
require_once(__DIR__ . '/../css/prism-tomorrow.min.css');
require_once(__DIR__ . '/../css/prism-line-numbers.min.css');
ob_end_flush();
?></style>
</head>
<body class="line-numbers">
  <button onclick="go()" id="topBtn" title="Go to top"><svg width="32" height="38" viewBox="0 0 24 24" fill="none" stroke="#000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="18 15 12 9 6 15"/></svg></button>
<?php
if (isset($error)) {
  echo '<p id="err">' . $error . '</p>';
}
?>
  <div class="wrapper">
    <header>
      <h1><?=$meta['title']?></h1>
      <p><?=$meta['description']?></p>
      <hr>
    </header>
    <div class="inner">
<?php
}

function printFooter($logged_in, $origin_encoded) {
?>
    </div>
  </div>
  <footer>
    <p>
      <a href="https://html5.validator.nu/?doc=<?=$origin_encoded?>" target="_blank"><img src="/images/valid_html5.webp" title="Valid HTML 5" alt="Valid HTML 5"></a>
      <a href="https://jigsaw.w3.org/css-validator/validator?uri=<?=$origin_encoded?>" target="_blank"><img src="/images/valid_css3.webp" title="Valid CSS 3" alt="Valid CSS 3"></a>
      <a href="https://html5.validator.nu/?doc=<?=$origin_encoded?>" target="_blank"><img src="/images/valid_svg11.webp" title="Valid SVG 1.1" alt="Valid SVG 1.1"></a>
    </p>
    <p>Copyright &copy; 2020-2023 William Blake Galbreath</p>
  </footer>
<?php
  if ($logged_in) {
    echo '  <div id="pi">X<form method="post" action="/"><input name="logout" hidden><input type="submit" hidden></form></div>';
  } else {
    echo '  <div id="pi">&pi;</div>';
  }
}
