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
    <title>เข้าสู่ระบบ</title>
</head>

<body>

    <?php include("../sidebar_navbar.php"); ?>

    <div class="content">
        <?php include("login_form.php") ?>
    </div>

    <script src="../scripts/scriptLogin.js"></script>
</body>

<?php mysqli_close($connect) ?>

</html>