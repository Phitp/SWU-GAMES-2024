<?php
error_reporting(E_ALL ^ E_NOTICE);
session_start();
$open_connect = 1;
require('../../connect.php');
?>

<style>
  .container {
    background-color: rgb(255, 255, 255);
    width: 500px;
    height: 450px;
    padding: 20px;
    margin: 100px auto;
    border-radius: 10px;
  }

  .headTxt {
    text-align: center;
  }

  .seTxt {
    text-align: start;
  }

  select,
  .faculty {
    width: 500px;
    padding: 10px;
    font-size: 16px;
    border-radius: 6px;
  }

  select {
    cursor: pointer;
  }

  .boxsex {
    font-size: 18px;
    margin-bottom: 20px;
    line-height: 30px;
  }

  .boxsex input {
    cursor: pointer;
    margin-right: 10px;
  }

  .container span {
    display: flex;
    justify-content: center;
  }

  .btnsubmit {
    width: 250px;
    padding: 14px;
    font-size: 18px;
    color: #fff;
    background: #007bff;
    border: none;
    border-radius: 15px;
    margin-top: 20px;
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
      <h2 class="headTxt">ค้นหาบัตรประจำตัวนักกีฬา</h2>
      <h2 class="seTxt">คณะ</h2>

      <?php
      $strSQL = $strSQL = "SELECT * 
			FROM account as ac
      LEFT JOIN faculty as fa
      ON ac.faculty_id = fa.id
			WHERE user_id = '" . $_SESSION['user_id1'] . "'";
      $objQuery = mysqli_query($connect, $strSQL);
      $objResult = mysqli_fetch_array($objQuery);

      if (!$objResult) {
        echo '';
      } else {
      ?>
        <input type="text" class="faculty" readonly value='<?= $objResult["full_name"]; ?>'>
      <?php
      }
      ?>

      <h2 class="seTxt">ประเภทกีฬา</h2>
      <form class="boxsex">
        <input type="radio" name="Myradio" value="Male" onclick="displayRadioValue()">ประเภทชาย
        <input type="radio" name="Myradio" value="Female" onclick="displayRadioValue()">ประเภทหญิง
        <input type="radio" name="Myradio" value="Overall" onclick="displayRadioValue()">ประเภทผสม
        <input type="radio" name="Myradio" value="Smo" onclick="displayRadioValue()">สโมสรนิสิต
        <input type="radio" name="Myradio" value="Coach" onclick="displayRadioValue()">โค้ช
        <input type="radio" name="Myradio" value="Drum_major" onclick="displayRadioValue()">คฑากร
        <input type="radio" name="Myradio" value="Cheer_leader" onclick="displayRadioValue()">ผู้นำเชียร์
      </form>

      <form action="serch_card.php" method="post">
        <div id="sport">
          <select name="select_sport">
            <option value="">กรุณาเลือกประเภทกีฬาก่อน</option>
          </select>
        </div>
        <span>
          <button class="btnsubmit" type="submit"><i class="fa-solid fa-magnifying-glass"></i> ค้นหา</button>
        </span>
      </form>

      <?php // กีฬาชาย

      $strSQL = "SELECT * 
        FROM sport
        WHERE id < 20 and id >= 10";
      $objQuery = mysqli_query($connect, $strSQL);

      while ($row = mysqli_fetch_assoc($objQuery)) {
        $dataArray_Male[] = [
          "id" => $row["id"],
          "sportname" => $row["sport_name"],
        ];
      }

      $jsonData_Male = json_encode($dataArray_Male);

      echo "<script>let sport_Male = $jsonData_Male;</script>";

      ?>

      <?php // กีฬาหญิง

      $strSQL = "SELECT * 
        FROM sport
        WHERE id < 30 and id >= 20";
      $objQuery = mysqli_query($connect, $strSQL);

      while ($row = mysqli_fetch_assoc($objQuery)) {
        $dataArray_Female[] = [
          "id" => $row["id"],
          "sportname" => $row["sport_name"],
        ];
      }

      $jsonData_Female = json_encode($dataArray_Female);

      echo "<script>let sport_Female = $jsonData_Female;</script>";

      ?>

      <?php // กีฬาหญิง

      $strSQL = "SELECT * 
      FROM sport
      WHERE id < 30 and id >= 20";
      $objQuery = mysqli_query($connect, $strSQL);

      while ($row = mysqli_fetch_assoc($objQuery)) {
        $dataArray_Female[] = [
          "id" => $row["id"],
          "sportname" => $row["sport_name"],
        ];
      }

      $jsonData_Female = json_encode($dataArray_Female);

      echo "<script>let sport_Female = $jsonData_Female;</script>";

      ?>

      <?php // กีฬาผสม

      $strSQL = "SELECT * 
      FROM sport
      WHERE id < 40 and id >= 30";
      $objQuery = mysqli_query($connect, $strSQL);

      while ($row = mysqli_fetch_assoc($objQuery)) {
        $dataArray_Overall[] = [
          "id" => $row["id"],
          "sportname" => $row["sport_name"],
        ];
      }

      $jsonData_Overall = json_encode($dataArray_Overall);

      echo "<script>let sport_Overall = $jsonData_Overall;</script>";

      ?>

      <?php // คฑากร

      $strSQL = "SELECT * 
      FROM sport
      WHERE id < 50 and id >= 40";
      $objQuery = mysqli_query($connect, $strSQL);

      while ($row = mysqli_fetch_assoc($objQuery)) {
        $dataArray_Drum_major[] = [
          "id" => $row["id"],
          "sportname" => $row["sport_name"],
        ];
      }

      $jsonData_Drum_major = json_encode($dataArray_Drum_major);

      echo "<script>let Drum_major = $jsonData_Drum_major;</script>";

      ?>

      <?php // ลีด

      $strSQL = "SELECT * 
      FROM sport
      WHERE id < 60 and id >= 50";
      $objQuery = mysqli_query($connect, $strSQL);

      while ($row = mysqli_fetch_assoc($objQuery)) {
        $dataArray_Cheer_leader[] = [
          "id" => $row["id"],
          "sportname" => $row["sport_name"],
        ];
      }

      $jsonData_Cheer_leader = json_encode($dataArray_Cheer_leader);

      echo "<script>let Cheer_leader = $jsonData_Cheer_leader;</script>";

      ?>

      <?php // โค้ช

      $strSQL = "SELECT * 
      FROM sport
      WHERE id < 90 and id >= 60";
      $objQuery = mysqli_query($connect, $strSQL);

      while ($row = mysqli_fetch_assoc($objQuery)) {
        $dataArray_Coach[] = [
          "id" => $row["id"],
          "sportname" => $row["sport_name"],
        ];
      }

      $jsonData_Coach = json_encode($dataArray_Coach);

      echo "<script>let Coach = $jsonData_Coach;</script>";

      ?>

      <?php // สโม

      $strSQL = "SELECT * 
      FROM sport
      WHERE id >= 90";
      $objQuery = mysqli_query($connect, $strSQL);

      while ($row = mysqli_fetch_assoc($objQuery)) {
        $dataArray_Smo[] = [
          "id" => $row["id"],
          "sportname" => $row["sport_name"],
        ];
      }

      $jsonData_Smo = json_encode($dataArray_Smo);

      echo "<script>let Smo = $jsonData_Smo;</script>";

      ?>

      <script>
        function displayRadioValue() {
          var ele = document.getElementsByName('Myradio');

          for (i = 0; i < ele.length; i++) {
            if (ele[i].checked) {
              // console.log(ele[i].value);
              var x = ele[i].value;
            }

            var selectsportTxt = '';
            var optiontxt = '';

            if (x == "Male") {
              sport_Male.forEach(sport => {
                optiontxt += `
                  <option value="${sport.id}">${sport.sportname}</option>
                  `;
              });
            } else if (x == "Female") {
              sport_Female.forEach(sport => {
                optiontxt += `
                  <option value="${sport.id}">${sport.sportname}</option>
                  `;
              });
            } else if (x == "Overall") {
              sport_Overall.forEach(sport => {
                optiontxt += `
                  <option value="${sport.id}">${sport.sportname}</option>
                  `;
              });
            } else if (x == "Smo") {
              Smo.forEach(sport => {
                optiontxt += `
                  <option value="${sport.id}">${sport.sportname}</option>
                  `;
              });
            } else if (x == "Coach") {
              Coach.forEach(sport => {
                optiontxt += `
                  <option value="${sport.id}">${sport.sportname}</option>
                  `;
              });
            } else if (x == "Drum_major") {
              Drum_major.forEach(sport => {
                optiontxt += `
                  <option value="${sport.id}">${sport.sportname}</option>
                  `;
              });
            } else if (x == "Cheer_leader") {
              Cheer_leader.forEach(sport => {
                optiontxt += `
                  <option value="${sport.id}">${sport.sportname}</option>
                  `;
              });
            }
          }

          selectsportTxt += `<select name="select_sport">
                                    <option value="">เลือกกีฬา</option>` +
            optiontxt +
            `</select>`
          document.getElementById('sport').innerHTML = selectsportTxt;
        }
      </script>

      <?php
      // $sportSQL = "SELECT * 
      //     FROM sport 
      //     WHERE sport_gender = ''";
      // $sportQuery = mysqli_query($connect, $sportSQL);
      // $sportResult = mysqli_fetch_array($sportQuery);
      // echo mysqli_num_rows($sportQuery);
      ?>

    </div>
  </div>

  <?php $connect->close(); ?>
</body>

</html>