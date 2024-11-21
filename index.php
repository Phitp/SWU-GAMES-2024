<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SWU GAMES 2024</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/a81fe316a6.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="sidebar">
        <header>
            <img
                src="https://unity.swu.ac.th/download/srinakharinwirot_logo_th_color/?wpdmdl=412&refresh=673eecd7637581732177111%22%3EDownload%3C/a%3E%20%20%20%20%20%20%20%20%20%20%20%20%3C/div%3E%20%20%20%20%20%20%20%20%3C/div%3E%20%20%20%20%3C/div%3E%3C/div%3E%3C/div%3E">
            <h2>SWU GAMES 2024</h2>
        </header>
        <ul>
            <li><i class="fa-solid fa-right-to-bracket"></i> เข้าสู่ระบบ <span><i
                        class="fa-solid fa-angle-left"></i></span></li>
            <li><i class="fa-solid fa-trophy"></i> ประกาศผลการแข่งขัน <span><i
                        class="fa-solid fa-angle-left"></i></span></li>
            <li><i class="fa-solid fa-id-card"></i> บัตรประจำตัวนักกีฬา <span><i
                        class="fa-solid fa-angle-left"></i></span></li>
            <li><i class="fa-solid fa-circle-info"></i> วิธีการใช้งาน <span><i
                        class="fa-solid fa-angle-left"></i></span></li>
            <li><i class="fa-solid fa-video"></i> ช่องทางการรับชม <span><i class="fa-solid fa-angle-left"></i></span>
            </li>
            <li><i class="fa-solid fa-image"></i> ประมวลภาพ <span><i class="fa-solid fa-angle-left"></i></span></li>
            <li><i class="fa-solid fa-chart-simple"></i> สถิติการเข้าใช้งาน <span><i
                        class="fa-solid fa-angle-left"></i></span></li>
        </ul>
    </div>
    <div class="content">
        <header>
            <i class="fa-solid fa-bars"></i>
            <button class="btn-home">HOME</button>
            <h1 id="account">สำหรับ Admin</h1> <!-- สำหรับ Admin -->
            <button class="btn-map"><i class="fa-solid fa-map-location-dot"></i> สถานที่จัดแข่งกิจกรรม</button>
        </header>
        <div class="statistics">
            <div class="stat-item sport">
                <i class="fa-solid fa-person-running"></i>
                <div class="info">
                    <p>จำนวนกีฬา</p>
                    <h3>21 ประเภท</h3>
                </div>
            </div>
            <div class="stat-item">
                <i class="fa-solid fa-user"></i>
                <div class="info">
                    <p>จำนวนนักกีฬา</p>
                    <h3>000 คน</h3>
                </div>
            </div>
            <div class="stat-item">
                <i class="fa-solid fa-question"></i>
                <div class="info">
                    <p>จำนวน_____</p>
                    <h3>000 คน</h3>
                </div>
            </div>
            <div class="stat-item">
                <i class="fa-solid fa-bullseye"></i>
                <div class="info">
                    <p>ประกาศผลแล้ว</p>
                    <h3>99.9%</h3>
                </div>
            </div>
        </div>
        <div class="match-list">
            <h3>รายการคู่แข่งขัน</h3>
            <div class="slider">
                <div class="slides">
                    <img src="https://via.placeholder.com/600x300?text=Image+1" alt="Image 1">
                    <img src="https://via.placeholder.com/600x300?text=Image+2" alt="Image 2">
                    <img src="https://via.placeholder.com/600x300?text=Image+3" alt="Image 3">
                </div>
                <button class="prev">&#10094;</button>
                <button class="next">&#10095;</button>
            </div>
            <div class="dots">
                <span class="dot active" data-slide="0"></span>
                <span class="dot" data-slide="1"></span>
                <span class="dot" data-slide="2"></span>
            </div>
        </div>
    </div>

    <script src="script.js"></script>
</body>

</html>