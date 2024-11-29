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
data_announce = [
  { date: "29/11/2567", content: "ขอแจ้งให้ทราบว่า ระบบจะทำการปรับปรุงเซิร์ฟเวอร์ในวันเสาร์ที่ 2 ธันวาคม 2566 ตั้งแต่เวลา 00:00 - 06:00 น. ในระหว่างนี้อาจมีผลกระทบต่อการใช้งานระบบบางส่วน ขออภัยในความไม่สะดวก และขอขอบคุณสำหรับความเข้าใจ🙏", link: '' },
  { date: "30/11/2567", content: "ขอแจ้งให้ทราบว่า ระบบจะทำการปรับปรุงเซิร์ฟเวอร์ในวันเสาร์ที่ 2 ธันวาคม 2566 ตั้งแต่เวลา 00:00 - 06:00 น. ในระหว่างนี้อาจมีผลกระทบต่อการใช้งานระบบบางส่วน ขออภัยในความไม่สะดวก และขอขอบคุณสำหรับความเข้าใจ🙏", link: '' },
  { date: "01/01/2567", content: "ขอแจ้งให้ทราบว่า ระบบจะทำการปรับปรุงเซิร์ฟเวอร์ในวันเสาร์ที่ 2 ธันวาคม 2566 ตั้งแต่เวลา 00:00 - 06:00 น. ในระหว่างนี้อาจมีผลกระทบต่อการใช้งานระบบบางส่วน ขออภัยในความไม่สะดวก และขอขอบคุณสำหรับความเข้าใจ🙏", link: '' },
  { date: "01/01/2567", content: "ขอแจ้งให้ทราบว่า ระบบจะทำการปรับปรุงเซิร์ฟเวอร์ในวันเสาร์ที่ 2 ธันวาคม 2566 ตั้งแต่เวลา 00:00 - 06:00 น. ในระหว่างนี้อาจมีผลกระทบต่อการใช้งานระบบบางส่วน ขออภัยในความไม่สะดวก และขอขอบคุณสำหรับความเข้าใจ🙏", link: '' },
];

var postsupdate = document.getElementById("postsUpdate");
var temp = 0;
data_announce.reverse();
postsupdate.innerHTML = "";
data_announce.forEach(data_an => {
  const txt = document.createElement("div");
  txt.classList.add('post');
  if(temp == 0) {
    gif = "./gif/new_2.gif";
    tempdate = data_an.date;
    temp += 1;
  } else if(tempdate == data_an.date) {
    gif = "./gif/new_2.gif";
  } else {
    gif = "";
  }

  txt.innerHTML = `
                  วันที่ ${data_an.date} <img src="${gif}"><br>
                  เนื้อหา: ${data_an.content} <a href="${data_an.link}" target="_blank">รายละเอียด</a>
                  `;
  postsupdate.appendChild(txt);
});
