<?php

if (!defined('PL3XMAP')) {
  header('location: /');
  die();
}

session_start();

$logged_in = isset($_SESSION['username']);
$error = null;

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
    } else {
      tryLogin($username, $password);
    }
  }
  $logged_in = isset($_SESSION['username']);
}

function tryLogin($username, $password) {
  global $error;
  $user = getUser($username);
  if ($user === false) {
    $error = "Access Denied";
    return; // no user
  }
  if (!password_verify($password, $user['password'])) {
    $error = "Access Denied";
    return; // wrong password
  }
  if ($user['active'] !== 1) {
    $error = "Access Denied";
    return; // user not active
  }
  $_SESSION['userid'] = $user['id'];
  $_SESSION['username'] = $user['username'];
}

function trySignup($username, $password, $repeat) {
  global $error;
  if ($password !== $repeat) {
    $error = "Error: Passwords don't match";
    return; // passwords dont match
  }
  if (strlen($password) < 8) {
    $error = "Error: Password too short";
    return; // password too short
  }
  if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
    $error = "Error: Username not valid";
    return; // username not valid
  }
  if (getUser($username) !== false) {
    $error = "Error: Username taken";
    return; // username already exists
  }
  createUser($username, $password);
}

function getUser($username) {
  global $conn, $error;
  $sql = "SELECT * FROM `users` WHERE `username` = ?;";
  $stmt = mysqli_stmt_init($conn);
  if (!mysqli_stmt_prepare($stmt, $sql)) {
    $error = "Error: Something went wrong";
    return false; // failed
  }
  mysqli_stmt_bind_param($stmt, "s", $username);
  mysqli_stmt_execute($stmt);
  $result = mysqli_stmt_get_result($stmt);
  $row = mysqli_fetch_assoc($result);
  mysqli_stmt_close($stmt);
  if ($row) {
    return $row; // return user
  } else {
    return false; // no user
  }
}

function createUser($username, $password) {
  global $conn, $error;
  $sql = "INSERT INTO `users` (`username`, `password`) VALUES (?, ?);";
  $stmt = mysqli_stmt_init($conn);
  if (!mysqli_stmt_prepare($stmt, $sql)) {
    $error = "Error: Something went wrong";
    return; // failed
  }
  $hashed = password_hash($password, PASSWORD_DEFAULT);
  mysqli_stmt_bind_param($stmt, "ss", $username, $hashed);
  mysqli_stmt_execute($stmt);
  mysqli_stmt_close($stmt);
}
