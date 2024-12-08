<?php
error_reporting(E_ALL ^ E_NOTICE);
session_start();
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

  select {
    width: 500px;
    padding: 10px;
    font-size: 16px;
    border-radius: 6px;
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

  <?php include("../sidebar.php");
  include("../navbar.php"); ?>

  <?php include("../content.php") ?>

  <div class="content">
    <div class="container">
      <h2 class="headTxt">ค้นหาบัตรประจำตัวนักกีฬา</h2>
      <h2 class="seTxt">คณะ</h2>
      <select id="faculty">
        <option value="">เลือกคณะ/วิทยาลัย</option>
        <option value="CardED">คณะศึกษาศาสตร์</option>
        <option value="CardPE">คณะพลศึกษา</option>
        <option value="CardHM">คณะมนุษยศาสตร์</option>
        <option value="CardSC">คณะวิทยาศาสตร์</option>
        <option value="CardSS">คณะสังคมศาสตร์</option>
        <option value="CardMD">คณะแพทยศาสตร์</option>
        <option value="CardEG">คณะวิศวกรรมศาสตร์</option>
        <option value="CardFOFA">คณะศิลปกรรมศาสตร์</option>
        <option value="CardDT">คณะทันตแพทยศาสตร์</option>
        <option value="CardPH">คณะเภสัชศาสตร์</option>
        <option value="CardPT">คณะกายภาพบำบัด</option>
        <option value="CardNS">พยาบาลศาสตร์</option>
        <option value="CardIC">วิทยาลัยนานาชาติเพื่อศึกษาความยั่งยืน</option>
        <option value="CardCOSCI">วิทยาลัยนวัตกรรมสื่อสารสังคม</option>
        <option value="CardCCAS">วิทยาลัยโพธิวิชชาลัย</option>
        <option value="CardECS">คณะเศรษฐศาสตร์</option>
        <option value="CardAI">คณะเทคโนโลยีและนวัตกรรมผลิตภัณฑ์การเกษตร</option>
        <option value="CardECE">คณะวัฒนธรรมสิ่งแวดล้อมและการท่องเที่ยวเชิงนิเวศ</option>
        <option value="CardCCI">วิทยาลัยอุตสาหกรรมสร้างสรรค์</option>
        <option value="CardBAS">คณะบริหารธุรกิจเพื่อสังคม</option>
      </select>
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
  </div>

</body>

</html>

<script>
  // link page
  var home = document.getElementById('btnHome');
  // var announce = document.getElementById('btnAnnounce');
  // var help = document.getElementById('btnHelp');
  // var live = document.getElementById('btnLive');
  // var picture = document.getElementById('btnPicture');

  home.addEventListener("click", function() {
    window.location.assign('../index.php');
  });

  // announce.addEventListener("click", function() {
  //   window.location.assign('../PageAnnounce/Page_announce.php');
  // });

  // help.addEventListener("click", function() {
  //   window.open('ไฟล์วิธีการใช้งาน', '_blank');
  // });

  // live.addEventListener("click", function() {
  //   window.open('ลิ้งช่องทางการไลฟ์', '_blank');
  // });

  // picture.addEventListener("click", function() {
  //   window.open('ลิ้งช่องทางรูปภาพ', '_blank');
  // });
</script>