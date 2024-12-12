<?php
session_start();

if ($_SESSION['status1'] == 'Admin') {
  echo "<meta http-equiv='refresh' content='0;url=../admin/add_admin.php'>";
} elseif ($_SESSION['status1'] == 'Soswu') {
  echo "<meta http-equiv='refresh' content='0;url=../soswu/add_soswu.php'>";
} else {
  echo "<meta http-equiv='refresh' content='0;url=http://127.0.0.1/SWU-GAMES-2024/index.php'>";
}

?>