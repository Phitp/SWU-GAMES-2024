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

    <script src="../scripts/scriptLogin.js"></script>
</body>

</html>