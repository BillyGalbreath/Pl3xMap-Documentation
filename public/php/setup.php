<?php

if (!defined('PL3XMAP')) {
  header('location: /');
  die();
}

require_once(__DIR__ . '/origin.php');
require_once(__DIR__ . '/db.php');
require_once(__DIR__ . '/login.php');

$sections = sql('SELECT * FROM `content` ORDER BY `order` ASC;');

$meta = array();
foreach(sql('SELECT * FROM `meta`;') as $pair) {
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
