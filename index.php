<?php
error_reporting(E_ALL ^ E_NOTICE);
session_start();
?>

<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SWU GAMES 2024</title>
    <link rel="stylesheet" href="styles/style_index.css">
</head>

<body>

    <?php
    if (isset($_SESSION['status1'])) {
        include("sidebar_navbar_m.php");
    } else {
        include("sidebar_navbar.php");
    }
    ?>
    
    <div class="content">
        <div class="statistics">
            <div class="stat-item sport">
                <i class="fa-solid fa-person-running"></i>
                <div class="info">
                    <p>จำนวนกีฬา</p>
                    <h3>22 ประเภท</h3>
                </div>
            </div>
            <div class="stat-item">
                <i class="fa-solid fa-school"></i>
                <div class="info">
                    <p>คณะ/วิทยาลัย</p>
                    <h3>20 คณะ</h3>
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
                <i class="fa-solid fa-bullseye"></i>
                <div class="info">
                    <p>ประกาศผลแล้ว</p>
                    <h3>99.9%</h3>
                </div>
            </div>
        </div>

        <div class="hero">
            <div class="hero-left">
                <div class="information">
                    <h3><i class="fa-solid fa-bullhorn"></i> ประกาศสำคัญ</h3>
                    <div class="posts" id="postsUpdate">
                        <!-- <div class="post">
                    วันที 00/00/0000 (new)<br>
                    เนื้อหา:........................ <a href="">ลิ้ง</a>
                </div> -->
                    </div>
                </div>

                <div class="match-list">
                    <h3>รายการคู่แข่งขัน วันที่ 00/00/0000</h3>
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

            <div class="hero-right">
                <div class="container">
                    <h1 id="date">สรุปคะแนน วันที่ 00/00/0000</h1>
                    <div class="score-table">
                        <div class="results">
                            <h3 class="sportname">กีฬาฟุตซอล (ประเภททีมชาย)</h3>
                            <div class="set-score">
                                <h3 id="gropVs" class="group">สาย A คู่ SC vs IC</h3>
                                <div class="set">
                                    <h2 id="set1">set 1</h2>
                                    <div class="pair">
                                        <p>SC</p>
                                        <div class="team" id="team1"></div>
                                        <div class="score">
                                            <p><span id="score-team1" class="score1">00</span> - <span
                                                    id="score-team2" class="score2">00</span></p>
                                        </div>
                                        <div class="team" id="team2"></div>
                                        <p>IC</p>
                                    </div>
                                </div>
                                <div class="set">
                                    <h2 id="set2">set 2</h2>
                                    <div class="pair">
                                        <p>SC</p>
                                        <div class="team" id="team1"></div>
                                        <div class="score">
                                            <p><span id="score-team1" class="score1">00</span> - <span
                                                    id="score-team2" class="score2">00</span></p>
                                        </div>
                                        <div class="team" id="team2"></div>
                                        <p>IC</p>
                                    </div>
                                </div>
                                <div class="set">
                                    <h2 id="set3">set 3</h2>
                                    <div class="pair">
                                        <p>SC</p>
                                        <div class="team" id="team1"></div>
                                        <div class="score">
                                            <p><span id="score-team1" class="score1">00</span> - <span
                                                    id="score-team2" class="score2">00</span></p>
                                        </div>
                                        <div class="team" id="team2"></div>
                                        <p>IC</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="sponsor-container">
            <h1> <i class="fa-solid fa-hand-holding-heart"></i> สนับสนุนโดย</h1>
            <div class="sponsor-grid" id="sponsor-grid">
                <!-- Images will be dynamically added here -->
            </div>
        </div>

    </div>

    <script src="scripts/scriptMain.js"></script>
</body>

</html>