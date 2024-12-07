<?php

$open_connect = 1;
require('../connect.php');

if (isset($_POST['user_account']) && isset($_POST['password_account'])) {
  $user_account = htmlspecialchars(mysqli_real_escape_string($connect, $_POST['user_account']));
  $password_account = htmlspecialchars(mysqli_real_escape_string($connect, $_POST['password_account']));

  if (empty($user_account)) {
    die(header('Location: Page_login.php'));
  } elseif (empty($password_account)) {
    die(header('Location: Page_login.php'));
  } else {
    echo 'ddddd';
  }
} else {
  die(header('Location: Page_login.php'));
}

?>