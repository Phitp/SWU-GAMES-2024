<?php
session_start();
$open_connect = 1;
require('../../connect.php');

// // ตรวจสอบว่ามีการกำหนดค่า user_id1 หรือไม่
// if (!isset($_SESSION['user_id1'])) {
//   echo "กรุณาเข้าสู่ระบบก่อนใช้งาน";
//   echo "<meta http-equiv='refresh' content='1;url=login.php'>";
//   exit();
// }
?>

<?php
// echo $_POST['select_sport'];
// echo $_SESSION['faculty_id1'];
  $strSQL = "SELECT * 
			FROM account
			WHERE sport_id = '" . trim($_POST['select_sport']) . "'
      and faculty_id = '" . trim($_SESSION['faculty_id1']) . "'";
  $objQuery = mysqli_query($connect, $strSQL);
  $objResult = mysqli_fetch_array($objQuery);

  // echo mysqli_num_rows($objQuery);


 if (!$objResult) {
   echo '<div align="center"><font color="#FF3300">';
   echo "<br>ไม่มีข้อมูลกีฬานี้";
   echo "<meta http-equiv='refresh' content='2;url=card.php'>";
?>

<?php
} else {
  $_SESSION['sport'] = $_POST['select_sport'];
  echo "<meta http-equiv='refresh' content='0;url=show_card.php'>";
}
$connect->close();
?>