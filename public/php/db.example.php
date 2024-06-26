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

function sql($sql, $types = null, ...$vars) {
  global $conn;
  $arr = array();
  $stmt = mysqli_stmt_init($conn);
  if (mysqli_stmt_prepare($stmt, $sql)) {
    if ($types != null) {
      mysqli_stmt_bind_param($stmt, $types, ...$vars);
    }
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    if ($result) {
      while ($row = mysqli_fetch_assoc($result)) {
        array_push($arr, $row);
      }
    }
    mysqli_stmt_close($stmt);
  }
  return $arr;
}
