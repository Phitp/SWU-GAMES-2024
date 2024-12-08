<?php
error_reporting(E_ALL ^ E_NOTICE);
session_start();
?>

<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>เข้าสู่ระบบ</title>
</head>

<body>

    <?php include("../sidebar.php");
    include("../navbar.php"); ?>

    <?php include("../content.php") ?>

    <div class="content">
        <?php include("login_form.php") ?>
    </div>

    
</body>

</html>

<script>
    // link page
    var home = document.getElementById('btnHome');
    // var announce = document.getElementById('btnAnnounce');
    var card = document.getElementById('btnCard');
    // var help = document.getElementById('btnHelp');
    // var live = document.getElementById('btnLive');
    // var picture = document.getElementById('btnPicture');

    home.addEventListener("click", function() {
        window.location.assign('../index.php');
    });

    // announce.addEventListener("click", function() {
    //   window.location.assign('../PageAnnounce/Page_announce.php');
    // });

    card.addEventListener("click", function() {
    window.location.assign('../card/ch_card.php');
    });

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