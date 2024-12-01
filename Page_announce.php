<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ประกาศผลการแข่งขัน</title>
    <link rel="stylesheet" href="style_LinkPages.css">
    <link rel="stylesheet" href="./style/style_Announce.css">
</head>

<body>

    <div class="homepage">
        <div class="sidebar">
            <header>
                <img src="./picture/logoSWU/Srinakharinwirot.png">
                <h2>SWU GAMES 2024</h2>
            </header>
            <ul>
                <li class="icon-sidebar" id="btnLogIn"><i class="fa-solid fa-right-to-bracket"></i> เข้าสู่ระบบ</li>
                <li class="icon-sidebar" id="btnAnnounce"><i class="fa-solid fa-trophy"></i> ประกาศผลการแข่งขัน</li>
                <li class="icon-sidebar" id="btnCard"><i class="fa-solid fa-id-card"></i> บัตรประจำตัวนักกีฬา</li>
                <li class="icon-sidebar" id="btnHelp"><i class="fa-solid fa-circle-info"></i> วิธีการใช้งาน</li>
                <li class="icon-sidebar" id="btnLive"><i class="fa-solid fa-video"></i> ช่องทางการรับชม</li>
                <li class="icon-sidebar" id="btnPicture"><i class="fa-solid fa-image"></i> ประมวลภาพ</li>
                <li class="stat-user" id="statUser"><i class="fa-solid fa-chart-simple"></i> สถิติการเข้าใช้งาน <i
                        class="fa-solid fa-angle-left arrow" id="arrowIcon"></i></li>
                <div class="today-user" id="todayUser">
                    <p><i class="fa-solid fa-network-wired"></i> วันนี้ : 0000 คน</p>
                    <p><i class="fa-solid fa-network-wired"></i> เมื่อวานนี้ : 0000 คน</p>
                    <p><i class="fa-solid fa-network-wired"></i> เดือนนี้ : 0000 คน</p>
                    <p><i class="fa-solid fa-network-wired"></i> ทั้งหมด : 0000 คน</p>
                </div>
            </ul>
        </div>

        <nav>
            <button class="btn-home" id="btnHome"><i class="fa-solid fa-house"></i> HOME</button>
            <h1 id="account"></h1> <!-- สวัสดีคุณ ........  -->
            <button class="btn-map" id="btnMap"><i class="fa-solid fa-map-location-dot"></i>
                สถานที่จัดแข่งกิจกรรม</button>
        </nav>

        <div class="content">
            <div class="container">
                <h2>กีฬาประเภทชาย</h2>
                <div class="btnscore">
                    <button>กีฬาฟุตซอล</button>
                    <button>กีฬาบาสเกตบอล</button>
                    <button>กีฬาวอลเลย์บอล</button>
                    <button>กีฬาแบดมินตัน</button>
                    <button>กีฬากรีฑา 100 เมตร</button>
                    <button>กีฬากรีฑา 200 เมตร</button>
                    <button>กีฬากรีฑา 400 เมตร</button>
                </div>
                <h2>กีฬาประเภทหญิง</h2>
                <div class="btnscore">
                    <button>กีฬาแชร์บอล</button>
                    <button>กีฬาบาสเกตบอล</button>
                    <button>กีฬาวอลเลย์บอล</button>
                    <button>กีฬาแบดมินตัน</button>
                    <button>กีฬากรีฑา 100 เมตร</button>
                    <button>กีฬากรีฑา 200 เมตร</button>
                    <button>กีฬากรีฑา 400 เมตร</button>
                </div>
                <h2>กีฬาประเภทผสม</h2>
                <div class="btnscore">
                    <button>กีฬาแบดมินตัน</button>
                    <button> กีฬา A &ndash; MATH</button>
                    <button>กีฬา CROSSWORD</button>
                    <button>กีฬาหมากฮอสไทย</button>
                    <button>กีฬา E &ndash; SPORT ROV</button>
                    <button>E &ndash; SPORT VALORANT</button>
                    <button>กีฬากรีฑา ผลัดผสม 4x100 เมตร</button>
                    <button>กีฬากรีฑา ผลัดผสม 4x400 เมตร</button>
                </div>
                <div class="line"></div>
                <div class="committee" id="committeeScore">
                    <h2>สำหรับกรรมการ</h2>
                    <button>กรอกคะแนน</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://kit.fontawesome.com/a81fe316a6.js" crossorigin="anonymous"></script>
    <script src="./script/scriptAnnounce.js"></script>
    <script src="linkPages.js"></script>
</body>

</html>