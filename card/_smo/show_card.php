<?php
error_reporting(E_ALL ^ E_NOTICE);
session_start();
$open_connect = 1;
require('../../connect.php');
?>

<!DOCTYPE html>
<html lang="th">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>บัตรประจำตัวนักกีฬา</title>
</head>

<body>

  <?php include("../../sidebar_m.php");
  include("../../navbar_m.php"); ?>

  <?php include("../../content.php") ?>

  <div class="content">

    <div class="container">

      <?php
      $strSQL = "SELECT * 
    FROM sport
    WHERE id = '" . trim($_SESSION['sport']) . "'";
      $objQuery = mysqli_query($connect, $strSQL);
      $objResult = mysqli_fetch_array($objQuery);
      ?>

      <button onclick="window.location.assign('card.php');">ย้อนกลับ</button>

      <h1>ประเภท <?php echo $objResult['sport_name']; ?></h1>
      <button>ดาวน์โหลดทั้งหมด</button>

      <?php
      $strSQL = "SELECT * 
      FROM account
      LEFT JOIN faculty
      ON account.faculty_id = faculty.id
      WHERE sport_id = '" . trim($_SESSION['sport']) . "'
        and faculty_id = '" . trim($_SESSION['faculty_id1']) . "'";
      $objQuery = mysqli_query($connect, $strSQL);
      ?>

      <?php
      
        echo "<table border='1'>";
        echo "<tr>
            <th>รหัสนิสิต</th>
            <th>ชื่อ-สกุล</th>
            <th>คณะ/วิทยาลัย</th>
            <th>ชั้นปี</th>
            <th>บัตรประจำตัวนักกีฬา</th>
          </tr>";

        // วนลูปแสดงข้อมูล
        while ($row = mysqli_fetch_assoc($objQuery)) {
          echo "<tr>
                <td>" . ($row["username"]) . "</td>
                <td>" . ($row["user_initial"]) . " " . ($row["first_name"]) . " " . ($row["last_name"]) . "</td>
                <td>" . ($row["full_name"]) . "</td>
                <td>" . ($row["year"]) . "</td>
                <!--<td><a href='card.php?id=" . ($row["user_id"]) . "' target='_blank'><i class='fa-solid fa-magnifying-glass'> ตรวสอบข้อมูล</i></a></td>-->
              </tr>";
        }

        echo "</table>";
        
      ?>

    </div>

  </div>

  <?php $connect->close(); ?>
</body>

</html>