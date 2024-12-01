<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SWU GAMES 2024</title>
    <link rel="stylesheet" href="style_Main.css">
    <link rel="stylesheet" href="./ModalPage/modalstyle.css">
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
            <!-- Trigger Button -->
            <button class="btn btn-primary" id="openModal">View PDF</button>

            <!-- Modal -->
            <div class="modal fade" id="pdfModal" tabindex="-1" aria-labelledby="pdfModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="pdfModalLabel">PDF Viewer</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <iframe src="./ModalPage/pdf/test.pdf" id="pdfViewer" class="pdf-frame"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </nav>

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
                        <h3>20 --</h3>
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
    </div>

    <script src="https://kit.fontawesome.com/a81fe316a6.js" crossorigin="anonymous"></script>
    <!-- Include jQuery and Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Include Custom JS -->
    <script src="script.js"></script>
    <script src="scriptMain.js"></script>
    <script src="linkPages.js"></script>
    <script src="./ModalPage/modal.js"></script>
</body>

</html>