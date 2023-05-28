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

function getSections() {
  global $conn;
  $sections = array();
  $sql = "SELECT * FROM content;";
  $stmt = mysqli_stmt_init($conn);
  if (mysqli_stmt_prepare($stmt, $sql)) {
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    while ($row = mysqli_fetch_array($result)) {
      array_push($sections, $row);
    }
    mysqli_stmt_close($stmt);
  }
  return $sections;
}
