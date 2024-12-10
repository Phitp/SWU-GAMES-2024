<?php
session_start();
?>

<?php
if (!isset($_SESSION['status1'])) {
  echo "กรุณาเข้าสู่ระบบก่อนใช้งาน";
  echo "<meta http-equiv='refresh' content='1;http://127.0.0.1/SWU-GAMES-2024/login/login.php'>";
  exit();
} elseif ($_SESSION['status1'] == 'Smo') {
  echo "<meta http-equiv='refresh' content='0;_smo/card.php'>";
}
elseif ($_SESSION['status1'] == 'User') {
  echo "<meta http-equiv='refresh' content='0;_user/card.php'>";
}
elseif ($_SESSION['status1'] == 'Admin') {
  // echo "<meta http-equiv='refresh' content='0;_user/card.php'>";
} 
elseif ($_SESSION['status1'] == 'Soswu') {
  echo "<meta http-equiv='refresh' content='0;../soswu/add_data.php'>";
}
?> 