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

  <?php include("../content.php");?>

  <div class="content">
    <div class="container">

      <?php include('../insert_data/insert_a.php');?>

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
      WHERE status != 'Admin'
      ORDER BY account.time DESC ";
      $objQuery = mysqli_query($connect, $strSQL);
      ?>

      <?php

      echo "<table border='1'>";
      echo "<tr>
            <th>รหัสนิสิต</th>
            <th>ชื่อ-สกุล</th>
            <th>คณะ/วิทยาลัย</th>
            <th>ชั้นปี</th>
            <th>สถานะ</th>
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
                <td>" . ($row["status"]) . "</td>
                <td>" . ($row["sport_name"]) . "</td>
                <td><button onclick='openModal({$row['id']})'>แก้ไขข้อมูล</button></td>
              </tr>";
      }

      echo "</table>";
?>

<?php foreach ($row as $person): ?>
  <div id="modal<?php echo $person['id']; ?>" class="modal">
      <div class="modal-content">
          <span class="close" onclick="closeModal(<?php echo $person['id']; ?>)">&times;</span>
          <h2>รายละเอียดของ <?php echo $person['name']; ?></h2>
          <p>ชื่อ: <?php echo $person['name']; ?></p>
          <p>อายุ: <?php echo $person['age']; ?></p>
          <p>รายละเอียดเพิ่มเติม...</p>
      </div>
  </div>
  <?php endforeach; ?>

  <script>
      // Function to open the modal
      function openModal(id) {
          var modal = document.getElementById('modal' + id);
          modal.style.display = "block";
      }

      // Function to close the modal
      function closeModal(id) {
          var modal = document.getElementById('modal' + id);
          modal.style.display = "none";
      }

      // Close the modal if the user clicks outside of it
      window.onclick = function(event) {
          var modals = document.querySelectorAll('.modal');
          modals.forEach(function(modal) {
              if (event.target === modal) {
                  modal.style.display = "none";
              }
          });
      }
  </script>

    </div>
  </div>