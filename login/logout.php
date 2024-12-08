<?php
session_start();        // เริ่มต้นเซสชัน
session_destroy();      // ทำลายเซสชัน
header("Location: ../index.php"); // เปลี่ยนเส้นทางไปที่หน้า index.php
exit();                 // หยุดการทำงานของสคริปต์
?>