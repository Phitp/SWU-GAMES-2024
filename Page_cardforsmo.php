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

    <script src="https://kit.fontawesome.com/a81fe316a6.js" crossorigin="anonymous"></script>
    <script src="./script/scriptCardforsmo.js"></script>
    <script src="linkPages.js"></script>
</body>

</html>