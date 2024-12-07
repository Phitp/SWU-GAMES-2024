<style>
  @import url('https://fonts.googleapis.com/css2?family=Dancing+Script:wght@600&family=Roboto:wght@400;500;700&family=Sarabun:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap');

  /* styles.css */
  body {
    margin: 0;
    font-family: Sarabun, sans-serif;
    box-sizing: border-box;
    height: 100vh;
    background-color: #f2f2f2;
  }

  /* Sidebar */
  .sidebar {
    width: 250px;
    height: 1348px;
    background-color: #ADADAD;
    color: #000000;
    box-shadow: 0 0 12px rgba(0, 0, 0, 0.8);
    position: absolute;
    z-index: 1;
  }

  .sidebar header {
    display: flex;
    width: 234px;
    height: 30px;
    justify-content: space-around;
    align-items: center;
    padding: 13px 8px;
    border-bottom: 2px solid #000000;
    cursor: pointer;
  }

  .sidebar img {
    width: 60px;
    height: 51px;
  }

  .sidebar h2 {
    font-size: 20px;
  }

  .sidebar ul {
    list-style-type: none;
    padding: 0;
  }

  .sidebar ul li {
    display: flex;
    width: 210px;
    height: 24px;
    padding: 8px 16px;
    margin-left: 5px;
    font-size: 16px;
    font-weight: bold;
    cursor: pointer;
    align-items: center;
  }

  .sidebar ul li i {
    font-size: 20px;
    margin-right: 5px;
    cursor: pointer;
  }

  .icon-sidebar:hover,
  .stat-user:hover,
  .satatuseractive {
    background-color: #A40001;
    border-radius: 5px;
    padding-left: 10px;
    color: white;
  }

  .satatuseractive {
    background-color: #2F333E;
  }

  .stat-user .arrow {
    margin-left: auto;
  }

  .today-user {
    width: 210px;
    height: auto;
    font-size: 15px;
    font-weight: bold;
    padding: 8px 16px;
    padding-top: 0;
    margin-top: -6px;
    display: none;
  }

  .today-user p {
    margin-left: 25px;
  }

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

  /* Content */
  .content {
    width: 1647px;
    height: 1200px;
    margin-left: 250px;
    padding-bottom: 85px;
    padding-top: 5px;
    /* background: url("../picture/coverweb/test2023.png"); */
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
  }
</style>

<div class="sidebar">
  <header>
    <img src="Srinakharinwirot.png">
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
  <h1 id="account"></h1> <!-- สวัสดีคุณ ........ -->
  <button class="btn-map" id="btnMap"><i class="fa-solid fa-map-location-dot"></i>
    สถานที่จัดแข่งกิจกรรม</button>
</nav>

<script src="https://kit.fontawesome.com/a81fe316a6.js" crossorigin="anonymous"></script>
<script>
  // การเคลื่อนไหวสถิติการใช้งาน
  var statUserToday = document.getElementById('todayUser');
  var statuser = document.getElementById('statUser');
  var arrowicon = document.getElementById('arrowIcon');
  var display = 1;

  function hideAndShow() {
    if (display == 1) {
      statUserToday.style.display = "block";
      arrowicon.classList.remove("fa-angle-left");
      arrowicon.classList.add("fa-angle-down");
      statuser.classList.add("satatuseractive");
      display = 0;
    } else {
      statUserToday.style.display = "none";
      arrowicon.classList.add("fa-angle-left");
      arrowicon.classList.remove("fa-angle-down");
      statuser.classList.remove("satatuseractive");
      display = 1;
    }
  }
  statuser.addEventListener("click", hideAndShow);
</script>