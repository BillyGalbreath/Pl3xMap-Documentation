<?php

if (!defined('PL3XMAP')) {
  header('location: /');
  die();
}

require_once(__DIR__ . '/db.php');

session_start();

$logged_in = isset($_SESSION['username']);
unset($_SESSION['error']);

if ($logged_in && isset($_POST['logout'])) {
  session_unset();
  session_destroy();
  $logged_in = false;
} else {
  $username = @$_POST['username'];
  $password = @$_POST['password'];
  if (isset($username) && isset($password)) {
    $repeat = @$_POST['repeat'];
    if (isset($repeat)) {
      trySignup($username, $password, $repeat);
    }
    tryLogin($username, $password);
  }
  $logged_in = isset($_SESSION['username']);
}

function tryLogin($username, $password) {
  $user = getUser($username);
  if ($user === false) {
    $_SESSION['error'] = 'Access Denied';
    return; // no user
  }
  if (!password_verify($password, $user['password'])) {
    $_SESSION['error'] = 'Access Denied';
    return; // wrong password
  }
  if ($user['active'] !== 1) {
    $_SESSION['error'] = 'Access Denied';
    return; // user not active
  }
  $_SESSION['userid'] = $user['id'];
  $_SESSION['username'] = $user['username'];
  header('location: /admin');
  die();
}

function trySignup($username, $password, $repeat) {
  if ($password !== $repeat) {
    $_SESSION['error'] = 'Error: Passwords don\'t match';
    return; // passwords dont match
  }
  if (strlen($password) < 8) {
    $_SESSION['error'] = 'Error: Password too short';
    return; // password too short
  }
  if (!preg_match('/^[a-zA-Z0-9]*$/', $username)) {
    $_SESSION['error'] = 'Error: Username not valid';
    return; // username not valid
  }
  if (getUser($username) !== false) {
    $_SESSION['error'] = 'Error: Username taken';
    return; // username already exists
  }
  sql('INSERT INTO `users` (`username`, `password`) VALUES (?, ?);', 'ss',
    $username, password_hash($password, PASSWORD_DEFAULT));
}

function getUser($username) {
  $row = sql('SELECT * FROM `users` WHERE `username` = ?;', 's', $username);
  if (count($row) > 0) {
    return $row[0]; // return user
  } else {
    return false; // no user
  }
}
