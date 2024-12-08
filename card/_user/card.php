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
      <h2 class="headTxt">ค้นหาบัตรประจำตัวนักกีฬา</h2>
      <div class="boxinput">
        <input type="text" placeholder="รหัสนิสิต 13 หลัก">
        <button class="btnsubmit"><i class="fa-solid fa-magnifying-glass"></i> ค้นหา</button>
      </div>
    </div>
  </div>

</body>

</html>