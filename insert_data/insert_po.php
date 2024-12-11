<!-- INSERT INTO `account` (`user_id`, `username`, `password`, `status`, `user_initial`, `first_name`, `last_name`, `faculty_id`, `year`, `sport_id`, `department`, `img_profile`, `pdf_card`, `time`) VALUES (NULL, 'test', 'test', 'Admin', 'นาย', 'test', 'test', NULL, NULL, NULL, NULL, NULL, NULL, current_timestamp()) -->
<?php
session_start();
$open_connect = 1;
require('../connect.php');
?>

<?php
$username_in1 = $_POST['username_in'];
$password_in1 = $_POST['password_in'];
$status_in1 = $_POST['status_in'];
$initial_in1 = $_POST['initial_in'];
$first_in1 = $_POST['first_in'];
$last_in1 = $_POST['last_in'];
$faculty_in1 = $_POST['faculty_in'];
$year_in1 = $_POST['year_in'];
$sport_in1 = $_POST['sport_in'];
$file_img = $_POST['file_img'];
?>

<?php
if (!$username_in1) {
  echo '<div align="center"><font color="#FF3300">';
  echo "<br>กรุณากรอก username";
  echo "<meta http-equiv='refresh' content='2;url=selectpath.php'>";
}
if (!$password_in1) {
  $password_in1 = $username_in1;
}
if (!$status_in1) {
  echo '<div align="center"><font color="#FF3300">';
  echo "<br>กรุณาเลือก สถานะ";
  echo "<meta http-equiv='refresh' content='2;url=selectpath.php'>";
}
if (!$initial_in1) {
  echo '<div align="center"><font color="#FF3300">';
  echo "<br>กรุณาเลือก คำนำหน้า";
  echo "<meta http-equiv='refresh' content='2;url=selectpath.php'>";
}
if (!$first_in1) {
  echo '<div align="center"><font color="#FF3300">';
  echo "<br>กรุณากรอก ชื่อ";
  echo "<meta http-equiv='refresh' content='2;url=selectpath.php'>";
}
if (!$last_in1) {
  echo '<div align="center"><font color="#FF3300">';
  echo "<br>กรุณากรอก นามสกุล";
  echo "<meta http-equiv='refresh' content='2;url=selectpath.php'>";
}

if ($status_in1 == "User" && (!$faculty_in1 || !$year_in1 || !$sport_in1 || !$file_img)) {
  echo '<div align="center"><font color="#FF3300">';
  echo "<br>กรุณากรอกข้อมูลให้ครบถ้วน";
  echo "<meta http-equiv='refresh' content='2;url=selectpath.php'>";
} elseif ($status_in1 == "Soswu" && (!$faculty_in1 || !$year_in1 || !$file_img)) {
  echo '<div align="center"><font color="#FF3300">';
  echo "<br>กรุณากรอกข้อมูลให้ครบถ้วน";
  echo "<meta http-equiv='refresh' content='2;url=selectpath.php'>";
} elseif ($status_in1 == "Smo" && (!$faculty_in1 || !$year_in1 || !$file_img)) {
  echo '<div align="center"><font color="#FF3300">';
  echo "<br>กรุณากรอกข้อมูลให้ครบถ้วน";
  echo "<meta http-equiv='refresh' content='2;url=selectpath.php'>";
} else {
  $temp_check = true;
}
?>

<?php
if ($temp_check) {
  $strSQL = "SELECT * 
  FROM account
  WHERE username = '$username_in1'
    and sport_id = '$sport_in1' ";
  $objQuery = mysqli_query($connect, $strSQL);

  if (mysqli_num_rows($objQuery) > 0) {
    echo '<div align="center"><font color="#FF3300">';
    echo "<br>ข้อมูลซ้ำ";
    echo "<meta http-equiv='refresh' content='2;url=selectpath.php'>";
  } else {
    $sql = "INSERT INTO `account` 
    (`user_id`, `username`, `password`, `status`, `user_initial`, `first_name`, `last_name`, `faculty_id`, `year`, `sport_id`, `department`, `img_profile`, `pdf_card`, `time`) 
    VALUES 
    (NULL, '$username_in1', '$password_in1', '$status_in1', '$initial_in1', '$first_in1', '$last_in1', '$faculty_in1', '$year_in1', '$sport_in1', NULL, '$file_img', NULL, current_timestamp())";
  }

  if ($connect->query($sql) === TRUE) {
    echo "เพิ่มข้อมูลสำเร็จ!";
    echo "<meta http-equiv='refresh' content='2;url=selectpath.php'>";
  } else {
    // echo "ข้อผิดพลาด: " . $sql . "<br>" . $conn->error;
  }
} else {

}

?>

<?php $connect->close(); ?>