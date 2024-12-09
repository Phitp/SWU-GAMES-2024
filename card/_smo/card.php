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

      <script>
        function displayRadioValue() {
          var ele = document.getElementsByName('Myradio');

          sport_Male = [{
            sportname: "บาสเกตบอลชาย",
            id: 10
          }, {
            sportname: "วอลเลย์บอลชาย",
            id: 11
          }, {
            sportname: "ฟุตซอลชาย",
            id: 12
          }, {
            sportname: "แบดมินตัน ประเภทคู่ ชาย",
            id: 13
          }, {
            sportname: "วิ่ง 100 เมตร ชาย",
            id: 14
          }, {
            sportname: "วิ่ง 200 เมตร ชาย",
            id: 15
          }, {
            sportname: "วิ่ง 400 เมตร ชาย",
            id: 16
          }];
          sport_Female = [{
            sportname: "บาสเกตบอลหญิง",
            id: 20
          }, {
            sportname: "วอลเลย์บอลหญิง",
            id: 21
          }, {
            sportname: "แชร์บอลหญิง",
            id: 22
          }, {
            sportname: "แบดมินตัน ประเภทคู่ หญิง",
            id: 23
          }, {
            sportname: "วิ่ง 100 เมตร หญิง",
            id: 24
          }, {
            sportname: "วิ่ง 200 เมตร หญิง",
            id: 25
          }, {
            sportname: "วิ่ง 400 เมตร หญิง",
            id: 26
          }];
          sport_Overall = [{
            sportname: "แบดมินตัน ประเภทคู่ ชาย-หญิง",
            id: 30
          }, {
            sportname: "วิ่งผลัดผสม 4x100 เมตร",
            id: 31
          }, {
            sportname: "วิ่งผลัดผสม 4x400 เมตร",
            id: 32
          }, {
            sportname: "E-SPORT Valoarant ประเภททีม",
            id: 33
          }, {
            sportname: "E-SPORT ROV ประเภททีม",
            id: 34
          }, {
            sportname: "A Alt+0150 MATH ประเภทคู่ผสม",
            id: 35
          }, {
            sportname: "CROSSWORD ประเภทคู่ผสม",
            id: 36
          }, {
            sportname: "หมากฮอสไทย ประเภทคู่ผสม",
            id: 37
          }];

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
              // sport_Male.forEach(sport_Male => {
              //   optiontxt += `
              //     <option value="${sport_Male.id}">${sport_Male.sportname}</option>
              //     `;
              // });
            } else if (x == "Coach") {
              // sport_Male.forEach(sport_Male => {
              //   optiontxt += `
              //     <option value="${sport_Male.id}">${sport_Male.sportname}</option>
              //     `;
              // });
            } else if (x == "Drum_major") {
              // sport_Male.forEach(sport_Male => {
              //   optiontxt += `
              //     <option value="${sport_Male.id}">${sport_Male.sportname}</option>
              //     `;
              // });
            } else if (x == "Cheer_leader") {
              // sport_Male.forEach(sport_Male => {
              //   optiontxt += `
              //     <option value="${sport_Male.id}">${sport_Male.sportname}</option>
              //     `;
              // });
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