<?php

if (!defined('PL3XMAP')) {
  header('location: /');
  die();
}

$origin = $_SERVER['REQUEST_SCHEME'].'://'.$_SERVER['SERVER_NAME'];

$origin_encoded = urlencode($origin);
