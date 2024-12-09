<style>
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
    margin-bottom: 5px;
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

  .log-out {
    background-color: #A40001;
    border-radius: 5px;
    color: white;
  }

  .icon-sidebar:hover,
  .stat-user:hover,
  .satatuseractive,
  .live:hover {
    background-color: #A40001;
    border-radius: 5px;
    padding-left: 10px;
    color: white;
  }

  .satatuseractive {
    background-color: #2F333E;
  }

  .stat-user .arrow,
  .live .arrow {
    margin-left: auto;
  }

  .today-user,
  .socailbox {
    width: 210px;
    height: auto;
    font-size: 15px;
    font-weight: bold;
    padding: 8px 16px;
    padding-top: 0;
    margin-top: -6px;
    display: none;
  }

  .socailbox {
    margin-bottom: -15px;
  }

  .socailbox i {
    font-size: 35px;
  }

  .socailbox p {
    display: flex;
    justify-content: space-around;
    cursor: pointer;
  }

  .today-user p {
    margin-left: 25px;
  }
</style>

<div class="sidebar">
  <header>
    <img src="swu.png">
    <h2>SWU GAMES 2024</h2>
  </header>
  <ul>
    <li class="icon-sidebar log-out" onclick="window.location.assign('http://127.0.0.1/SWU-GAMES-2024/login/logout.php');"><i class="fa-solid fa-right-to-bracket"></i> ออกจากระบบ</li>
    <li class="icon-sidebar" onclick="window.location.assign('http://127.0.0.1/SWU-GAMES-2024/announce/announce_score.php');"><i class="fa-solid fa-trophy"></i> ประกาศผลการแข่งขัน</li>
    <li class="icon-sidebar" onclick="window.location.assign('http://127.0.0.1/SWU-GAMES-2024/card/check_card.php');"><i class="fa-solid fa-id-card"></i> บัตรประจำตัวนักกีฬา</li>
    <li class="icon-sidebar" id="btnHelp"><i class="fa-solid fa-circle-info"></i> วิธีการใช้งาน</li>
    <li class="stat-user" id="btnLive"><i class="fa-solid fa-video"></i> ช่องทางการรับชม <i
        class="fa-solid fa-angle-left arrow" id="arrowIcon_live"></i></li>
    <div class="socailbox" id="socail">
      <p><i class="fa-brands fa-facebook" onclick="window.open('https://www.facebook.com/soswu');" style="color: blue;"></i> <i class="fa-brands fa-youtube" onclick="window.open('https://www.youtube.com/@soswu_official');" style="color: red;"></i></p>
    </div>
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

<script>
  var socailBox = document.getElementById('socail');
  var live = document.getElementById('btnLive');
  var livearrow = document.getElementById('arrowIcon_live');
  var displaylive = 1;

  // การเคลื่อนไหวสถิติการใช้งาน
  var statUserToday = document.getElementById('todayUser');
  var statuser = document.getElementById('statUser');
  var arrowicon = document.getElementById('arrowIcon');
  var displaystat = 1;

  function hideAndShowStat() {
    if (displaystat == 1) {
      statUserToday.style.display = "block";
      arrowicon.classList.remove("fa-angle-left");
      arrowicon.classList.add("fa-angle-down");
      statuser.classList.add("satatuseractive");
      displaystat = 0;
    } else {
      statUserToday.style.display = "none";
      arrowicon.classList.add("fa-angle-left");
      arrowicon.classList.remove("fa-angle-down");
      statuser.classList.remove("satatuseractive");
      displaystat = 1;
    }
  }

  function hideAndShowSocail() {
    if (displaylive == 1) {
      socailBox.style.display = "block";
      livearrow.classList.remove("fa-angle-left");
      livearrow.classList.add("fa-angle-down");
      live.classList.add("satatuseractive");
      displaylive = 0;
    } else {
      socailBox.style.display = "none";
      livearrow.classList.add("fa-angle-left");
      livearrow.classList.remove("fa-angle-down");
      live.classList.remove("satatuseractive");
      displaylive = 1;
    }
  }

  statuser.addEventListener("click", hideAndShowStat);
  live.addEventListener("click", hideAndShowSocail);
</script>