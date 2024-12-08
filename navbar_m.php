<?php
session_start();
$open_connect = 1;
require('connect.php');
?>

<style>
  /* navbar */
  nav {
    display: flex;
    width: 1647px;
    height: 56px;
    align-items: center;
    border-bottom: 2px solid #000000;
    box-shadow: 0 0 12px rgba(0, 0, 0, 0.4);
    margin-left: 250px;
    position: relative;
    z-index: 0;
  }

  .btn-home,
  .btn-map {
    width: 150px;
    font-size: 24px;
    font-weight: bold;
    background-color: transparent;
    border: 0;
    outline: 0;
    cursor: pointer;
  }

  .btn-home {
    align-items: center;
    padding: auto;
  }

  nav h1 {
    font-size: 24px;
    color: #000000;
  }

  .btn-map {
    width: 300px;
    font-size: 20px;
    font-weight: normal;
    letter-spacing: 1px;
    margin-left: auto;
    margin-right: 30px;
  }
</style>

<nav>
  <button class="btn-home" id="btnHome"><i class="fa-solid fa-house"></i> HOME</button>
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
    <h1 id="account">สวัสดีคุณ <?= $objResult["first_name"]; ?></h1> <!-- สวัสดีคุณ ........ -->
  <?php
  }
  mysqli_close($connect);
  ?>
  <button class="btn-map" id="btnMap"><i class="fa-solid fa-map-location-dot"></i>
    สถานที่จัดแข่งกิจกรรม</button>
</nav>