<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>บัตรประจำตัวนักกีฬา</title>
    <link rel="stylesheet" href="style_LinkPages.css">
    <link rel="stylesheet" href="./style/style_CardForSmo.css">
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
                <h2 class="headTxt">ค้นหาบัตรประจำตัวนักกีฬา</h2>
                <h2 class="seTxt">คณะ</h2>
                <select id="faculty" required>
                    <option value="">เลือกคณะ/วิทยาลัย</option>
                    <option value="volvo">Volvo</option>
                    <option value="saab">Saab</option>
                    <option value="fiat">Fiat</option>
                    <option value="audi">Audi</option>
                    <option value="audi">Audi</option>
                    <option value="audi">Audi</option>
                    <option value="audi">Audi</option>
                    <option value="audi">Audi</option>
                    <option value="audi">Audi</option>
                    <option value="audi">Audi</option>
                    <option value="audi">Audi</option>
                    <option value="audi">Audi</option>
                    <option value="audi">Audi</option>
                    <option value="audi">Audi</option>
                    <option value="audi">Audi</option>
                    <option value="audi">Audi</option>
                    <option value="audi">Audi</option>
                    <option value="audi">Audi</option>
                    <option value="audi">Audi</option>
                    <option value="audi">Audi</option>
                </select>
                <h2 class="seTxt">ประเภทกีฬา</h2>
                <form>
                    <div class="boxradio">
                        <input type="radio" id="html" value="HTML">
                        <h3>ชาย</h3>
                    </div>
                    <div class="boxradio">
                        <input type="radio" id="html" value="HTML">
                        <h3>หญิง</h3>
                    </div>
                    <div class="boxradio">
                        <input type="radio" id="html" value="HTML">
                        <h3>ผสม</h3>
                    </div>
                </form>
                <select id="sport" required>
                    <option value="">เลือกกีฬา</option>
                    <option value="volvo">Volvo</option>
                    <option value="saab">Saab</option>
                    <option value="fiat">Fiat</option>
                    <option value="audi">Audi</option>
                    <option value="audi">Audi</option>
                    <option value="audi">Audi</option>
                    <option value="audi">Audi</option>
                </select>
                <span>
                    <button class="btnsubmit"><i class="fa-solid fa-magnifying-glass"></i> ค้นหา</button>
                </span>
            </div>
        </div>
    </div>

    <script src="https://kit.fontawesome.com/a81fe316a6.js" crossorigin="anonymous"></script>
    <!-- <script src="scriptMain.js"></script> -->
    <script src="linkPages.js"></script>
</body>

</html>