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

  .btnscore {
    background-color: #004aa4;
    border-radius: 5px;
    color: white;
  }

  .icon-sidebar:hover,
  .stat-user:hover,
  .satatuseractive {
    background-color: #A40001;
    border-radius: 5px;
    padding-left: 10px;
    color: white;
  }

  .btnscore:hover {
    background-color: #004aa4;
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
</style>

<div class="sidebar">
  <header>
    <img src="swu.png">
    <h2>SWU GAMES 2024</h2>
  </header>
  <ul>
    <li class="icon-sidebar log-out" onclick="window.location.assign('http://127.0.0.1/SWU-GAMES-2024/login/logout.php');"><i class="fa-solid fa-right-to-bracket"></i> ออกจากระบบ</li>
    <li class="btnscore" onclick="window.location.assign('http://127.0.0.1/SWU-GAMES-2024/committee/add_score.php');"><i class="fa-solid fa-pen-ruler"></i> กรอกคะแนน</li>
    <li class="icon-sidebar" onclick="window.location.assign('http://127.0.0.1/SWU-GAMES-2024/announce/announce_score.php');"><i class="fa-solid fa-trophy"></i> ประกาศผลการแข่งขัน</li>
  </ul>
</div>