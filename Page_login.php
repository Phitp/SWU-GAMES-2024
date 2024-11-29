<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>เข้าสู่ระบบ</title>
    <link rel="stylesheet" href="style_LinkPages.css">
    <link rel="stylesheet" href="./style/style_Login.css">
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
            <div class="login-style">
                <div class="login-container">
                    <h1>เข้าสู่ระบบ</h1>
                    <form id="login-form">
                        <div class="input-group">
                            <label for="name" id="IDstd">รหัสนิสิต 13 หลัก</label>
                            <div class="input-wrapper">
                                <input type="text" placeholder="เช่น: 67xxxxxxxxxxx">
                                <i class="fa-regular fa-user"></i>
                            </div>
                        </div>
                        <div class="input-group">
                            <label for="password">รหัสผ่าน</label>
                            <div class="input-wrapper password">
                                <input type="password" placeholder="กรอกรหัสผ่านของคุณ" id="Password">
                                <i class="fa-regular fa-eye-slash eye" id="eyeIcon"></i>
                            </div>
                        </div>
                        <button class="loginBtn">เข้าสู่ระบบ</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://kit.fontawesome.com/a81fe316a6.js" crossorigin="anonymous"></script>
    <script src="./script/scriptLogin.js"></script>
    <script src="linkPages.js"></script>
</body>

</html>