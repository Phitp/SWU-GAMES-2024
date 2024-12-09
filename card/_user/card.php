<?php
error_reporting(E_ALL ^ E_NOTICE);
session_start();
?>

<style>
  .container {
    background-color: rgb(255, 255, 255);
    width: 500px;
    height: 130px;
    padding: 20px;
    margin: 100px auto;
    border-radius: 10px;
  }

  .headTxt {
    text-align: center;
  }

  .boxinput {
    display: flex;
    align-items: center;
    justify-content: center;
  }

  input {
    width: 300px;
    padding: 10px;
    font-size: 16px;
    border-radius: 6px;
  }

  .btnsubmit {
    width: 80px;
    padding: 10px;
    font-size: 16px;
    color: #fff;
    background: #007bff;
    border: none;
    border-radius: 15px;
    margin-left: 7px;
    cursor: pointer;
  }
</style>

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

      <button>ดาวน์โหลดทั้งหมด</button>

      <?php
      $strSQL = "SELECT * 
      FROM account
      LEFT JOIN faculty 
      ON account.faculty_id = faculty.id
      LEFT JOIN sport
      ON account.sport_id = sport.id
      WHERE username = '" . trim($_SESSION['username1']) . "'";
      $objQuery = mysqli_query($connect, $strSQL);
      ?>

      <?php

      echo "<table border='1'>";
      echo "<tr>
      <th>รหัสนิสิต</th>
      <th>ชื่อ-สกุล</th>
      <th>คณะ/วิทยาลัย</th>
      <th>ชั้นปี</th>
      <th>ประเภทกีฬา</th>
      <th>บัตรประจำตัวนักกีฬา</th>
    </tr>";

      // วนลูปแสดงข้อมูล
      while ($row = mysqli_fetch_assoc($objQuery)) {
        echo "<tr>
          <td>" . ($row["username"]) . "</td>
          <td>" . ($row["user_initial"]) . " " . ($row["first_name"]) . " " . ($row["last_name"]) . "</td>
          <td>" . ($row["full_name"]) . "</td>
          <td>" . ($row["year"]) . "</td>
          <td>" . ($row["sport_name"]) . "</td>
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