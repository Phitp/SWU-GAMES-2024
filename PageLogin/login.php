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
    // เช็ครหัสผ่าน
    $query_check_username_account = "SELECT user_id FROM account WHERE user_id = '$user_account'";
    $call_back_query_username_account = mysqli_query($connect, $query_check_username_account);

    if (mysqli_num_rows( $call_back_query_username_account) > 0) { // นิสิต
      $query_check_user_password_account = "SELECT user_id FROM account WHERE user_id = '$user_account' AND user_id = '$password_account'";
      $call_back_query_user_password_account = mysqli_query($connect, $query_check_user_password_account);
      if (mysqli_num_rows($call_back_query_user_password_account) > 0) {
        die(header('Location: ../index_active.php')); // รหัสถูกต้อง
      } else {
        echo 'incorrect'; // รหัสผิด
      }
    } else { // คนนอก
      $query_check_user_password_account = "SELECT username , password FROM account WHERE username = '$user_account' AND password = '$password_account'";
      $call_back_query_user_password_account = mysqli_query($connect, $query_check_user_password_account);
      if (mysqli_num_rows($call_back_query_user_password_account) > 0) {
        die(header('Location: ../index_active.php')); // รหัสถูกต้อง
      } else {
        echo 'incorrect'; // รหัสผิด
      }
    }
  }
} else {
  die(header('Location: Page_login.php'));
}

?>