<?php

if (!defined('PL3XMAP')) {
  header('location: /');
  die();
}

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
require_once(__DIR__ . '/../prism/themes/prism-tomorrow.min.css');
require_once(__DIR__ . '/../prism/plugins/prism-line-numbers.min.css');
ob_end_flush();
?></style>
</head>
<body class="line-numbers">
  <button onclick="go()" id="topBtn" title="Go to top"><svg width="32" height="38" viewBox="0 0 24 24" fill="none" stroke="#000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="18 15 12 9 6 15"/></svg></button>
<?php
if (!$logged_in) {
?>
  <dialog id="d1"><form method="post" action="/admin"><input type="text" name="username" autocomplete="off"><br><input type="password" name="password" autocomplete="off"><input type="submit" hidden></form></dialog>
  <dialog id="d2"><form method="post" action="/"><input type="text" name="username" autocomplete="off"><br><input type="password" name="password" autocomplete="off"><br><input type="password" name="repeat" autocomplete="off"><input type="submit" hidden></form></dialog>
<?php
} else {
?>
  <form id="logout" method="post" action="/"><input name="logout" hidden><input type="submit" hidden></form>
<?php
}
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
