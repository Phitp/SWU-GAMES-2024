<?php
error_reporting(E_ALL ^ E_NOTICE);
session_start();
$open_connect = 1;
require('../connect.php');
?>

<!DOCTYPE html>
<html lang="th">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>บัตรประจำตัวนักกีฬา</title>
</head>

<body>

  <?php include("../sidebar_m.php");
  include("../navbar_m.php"); ?>

  <?php include("../content.php") ?>

  <div class="content">
    <div class="container">
      <button>เพิ่มข้อมูลนักกีฬา</button>
      <form>
        <input type="text" placeholder="search">
        <button>ค้นหา</button>
      </form>


      <?php
      $strSQL = "SELECT * 
      FROM account
      LEFT JOIN faculty
      ON account.faculty_id = faculty.id
      LEFT JOIN sport
      ON account.sport_id = sport.id
      WHERE status = 'User'
        or sport_id < 90";
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
            <th>แก้ไขข้อมูล</th>
          </tr>";

      // วนลูปแสดงข้อมูล
      while ($row = mysqli_fetch_assoc($objQuery)) {
        echo "<tr>
                <td>" . ($row["username"]) . "</td>
                <td>" . ($row["user_initial"]) . " " . ($row["first_name"]) . " " . ($row["last_name"]) . "</td>
                <td>" . ($row["full_name"]) . "</td>
                <td>" . ($row["year"]) . "</td>
                <td>" . ($row["sport_name"]) . "</td>
                <td><a href='card.php?id=" . ($row["user_id"]) . "' target='_blank'><i class='fa-solid fa-user-pen'></i> แก้ไขข้อมูล</i></a></td>
              </tr>";
      }

      echo "</table>";

      ?>

    </div>
  </div>