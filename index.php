<?php
error_reporting(E_ALL ^ E_NOTICE);
session_start();
?>
<?php
if (!isset($_SESSION['status1'])) {
} else {
    // echo $_SESSION['status1'];
    // echo "<meta http-equiv='refresh' content='3;url=index.php'>";
    echo "<meta name='author' content='url=index.php'>";
}
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
    if (!isset($_SESSION["status1"])) {
        include("sidebar.php");
        include("navbar.php");
    } else {
        include("sidebar_m.php");
        include("navbar_m.php");
    }
    ?>

    <?php include("content.php") ?>
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

    <script>
        // slide match
        const slides = document.querySelector('.slides');
        const images = document.querySelectorAll('.slides img');
        const dots = document.querySelectorAll('.dot');
        const prev = document.querySelector('.prev');
        const next = document.querySelector('.next');

        let currentIndex = 0;

        function showSlide(index) {
            if (index < 0) {
                currentIndex = images.length - 1;
            } else if (index >= images.length) {
                currentIndex = 0;
            } else {
                currentIndex = index;
            }

            slides.style.transform = `translateX(-${currentIndex * 100}%)`;
            dots.forEach(dot => dot.classList.remove('active'));
            dots[currentIndex].classList.add('active');
        }

        prev.addEventListener('click', () => showSlide(currentIndex - 1));
        next.addEventListener('click', () => showSlide(currentIndex + 1));

        dots.forEach(dot => {
            dot.addEventListener('click', () => {
                const index = parseInt(dot.getAttribute('data-slide'));
                showSlide(index);
            });
        });

        // Auto slide (optional)
        setInterval(() => showSlide(currentIndex + 1), 5000); // Change every 5 seconds

        // sponser tab ------ 
        const sponsors = [
            "images/image1.png",
            "images/image2.png",
            "images/image3.png",
            "images/image1.png", // Repeat to demonstrate layout
            "images/image2.png",
            "images/image3.png",
        ];

        // Function to render sponsor images
        function renderSponsors() {
            const sponsorGrid = document.getElementById("sponsor-grid");
            sponsors.forEach(src => {
                const div = document.createElement("div");
                div.className = "sponsor-item";

                const img = document.createElement("img");
                img.src = src;
                img.alt = "Sponsor Logo";

                div.appendChild(img);
                sponsorGrid.appendChild(div);
            });
        }

        // Initialize the sponsor grid
        renderSponsors();

        // ประกาศสำคัญ
        data_announce = [{
                date: "29/11/2567",
                content: "ขอแจ้งให้ทราบว่า ระบบจะทำการปรับปรุงเซิร์ฟเวอร์ในวันเสาร์ที่ 2 ธันวาคม 2566 ตั้งแต่เวลา 00:00 - 06:00 น. ในระหว่างนี้อาจมีผลกระทบต่อการใช้งานระบบบางส่วน ขออภัยในความไม่สะดวก และขอขอบคุณสำหรับความเข้าใจ🙏",
                link: ''
            },
            {
                date: "30/11/2567",
                content: "ขอแจ้งให้ทราบว่า ระบบจะทำการปรับปรุงเซิร์ฟเวอร์ในวันเสาร์ที่ 2 ธันวาคม 2566 ตั้งแต่เวลา 00:00 - 06:00 น. ในระหว่างนี้อาจมีผลกระทบต่อการใช้งานระบบบางส่วน ขออภัยในความไม่สะดวก และขอขอบคุณสำหรับความเข้าใจ🙏",
                link: ''
            },
            {
                date: "01/01/2567",
                content: "ขอแจ้งให้ทราบว่า ระบบจะทำการปรับปรุงเซิร์ฟเวอร์ในวันเสาร์ที่ 2 ธันวาคม 2566 ตั้งแต่เวลา 00:00 - 06:00 น. ในระหว่างนี้อาจมีผลกระทบต่อการใช้งานระบบบางส่วน ขออภัยในความไม่สะดวก และขอขอบคุณสำหรับความเข้าใจ🙏",
                link: ''
            },
            {
                date: "01/01/2567",
                content: "ขอแจ้งให้ทราบว่า ระบบจะทำการปรับปรุงเซิร์ฟเวอร์ในวันเสาร์ที่ 2 ธันวาคม 2566 ตั้งแต่เวลา 00:00 - 06:00 น. ในระหว่างนี้อาจมีผลกระทบต่อการใช้งานระบบบางส่วน ขออภัยในความไม่สะดวก และขอขอบคุณสำหรับความเข้าใจ🙏",
                link: ''
            },
        ];

        var postsupdate = document.getElementById("postsUpdate");
        var temp = 0;
        data_announce.reverse();
        postsupdate.innerHTML = "";
        data_announce.forEach(data_an => {
            const txt = document.createElement("div");
            txt.classList.add('post');
            if (temp == 0) {
                gif = "_gif/new_2.gif";
                tempdate = data_an.date;
                temp += 1;
            } else if (tempdate == data_an.date) {
                gif = "_gif/new_2.gif";
            } else {
                gif = "";
            }

            txt.innerHTML = `
                  วันที่ ${data_an.date} <img src="${gif}"><br>
                  เนื้อหา: ${data_an.content} <a href="${data_an.link}" target="_blank">รายละเอียดเพิ่มเติม</a>
                  `;
            postsupdate.appendChild(txt);
        });
    </script>
</body>

</html>