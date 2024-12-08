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
    height: 400px;
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

  form {
    display: flex;
    justify-content: space-around;
    margin-top: -20px;
  }

  .boxsex {
    font-size: 18px;
    margin-bottom: 20px;
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
      $strSQL = "SELECT * 
			FROM account
			WHERE user_id = '" . $_SESSION['user_id1'] . "' ";
      $objQuery = mysqli_query($connect, $strSQL);
      $objResult = mysqli_fetch_array($objQuery);

      if (!$objResult) {
        echo '';
      } else {
      ?>
        <input type="text" class="faculty" readonly value='<?= $objResult["first_name"]; ?>'>
      <?php
      }
      ?>

      <h2 class="seTxt">ประเภทกีฬา</h2>
      <div class="boxsex">
        <input type="radio" name="gender" value="Male">ชาย
        <input type="radio" name="gender" value="Female">หญิง
        <input type="radio" name="gender" value="Others">ผสม
      </div>
      <select id="sport">
        <option value="">เลือกกีฬา</option>
        <option value="volvo">Volvo</option>
        <option value="saab">Saab</option>
        <option value="fiat">Fiat</option>
        <option value="audi">Audi</option>
        <option value="audi">Audi</option>
        <option value="audi">Audi</option>
        <option value="audi">Audi</option>
        <!-- <option value="audi">Audi</option> -->
      </select>
      <span>
        <button class="btnsubmit"><i class="fa-solid fa-magnifying-glass"></i> ค้นหา</button>
      </span>
    </div>
  </div>

  <?php $connect->close(); ?>
</body>

</html>