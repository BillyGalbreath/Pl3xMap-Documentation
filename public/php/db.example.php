<?php

if (!defined('PL3XMAP')) {
  header('location: /');
  die();
}

$db_user = 'username';
$db_pass = 'password';
$db_name = 'database';
$db_host = 'localhost';
$db_port = '3306';

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name, $db_port);

if (!$conn) {
  die('Connection failed: ' . mysqli_connect_error());
}
