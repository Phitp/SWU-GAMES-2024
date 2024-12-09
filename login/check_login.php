<?php
session_start();
$open_connect = 1;
require('../connect.php');

// // ตรวจสอบว่ามีการกำหนดค่า user_id1 หรือไม่
// if (!isset($_SESSION['user_id1'])) {
//   echo "กรุณาเข้าสู่ระบบก่อนใช้งาน";
//   echo "<meta http-equiv='refresh' content='1;url=login.php'>";
//   exit();
// }
?>

<?php
$strSQL = "SELECT * 
			FROM account
			WHERE username = '" . trim($_POST['user_account']) . "'
              and password = '" . trim($_POST['password_account']) . "'";
$objQuery = mysqli_query($connect, $strSQL);
$objResult = mysqli_fetch_array($objQuery);

if (!$objResult) {
  echo '<div align="center"><font color="#FF3300">';
  echo "<br>ชื่อเข้าใช้ หรือ รหัสผ่านไม่ถูกต้อง";
  echo "<meta http-equiv='refresh' content='2;url=login.php'>";
?>

<?php
} else {
  $_SESSION["user_id1"] = $objResult["user_id"];
  $_SESSION["status1"] = $objResult["status"];
  $_SESSION["faculty_id1"] = $objResult["faculty_id"];
  //session_write_close();
  echo "<meta http-equiv='refresh' content='0;url=../index.php'>";
}
$connect->close();
?>