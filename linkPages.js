// การเคลื่อนไหวสถิติการใช้งาน
var statUserToday = document.getElementById('todayUser');
var statuser = document.getElementById('statUser');
var arrowicon = document.getElementById('arrowIcon');
var display = 1;

function hideAndShow() {
  if(display == 1) {
    statUserToday.style.display = "block";
    arrowicon.classList.remove("fa-angle-left");
    arrowicon.classList.add("fa-angle-down");
    statuser.classList.add("satatuseractive");
    display = 0;
  } 
  else {
    statUserToday.style.display = "none";
    arrowicon.classList.add("fa-angle-left");
    arrowicon.classList.remove("fa-angle-down");
    statuser.classList.remove("satatuseractive");
    display = 1;
  }
}
statuser.addEventListener("click", hideAndShow);

// link page
var home = document.getElementById('btnHome');
var map = document.getElementById('btnMap');
var login = document.getElementById('btnLogIn'); 
var announce = document.getElementById('btnAnnounce');
var card = document.getElementById('btnCard');
var help = document.getElementById('btnHelp');
var live = document.getElementById('btnLive');
var picture = document.getElementById('btnPicture');

home.addEventListener("click", function() {
  window.location.assign('index.php');
});

map.addEventListener("click", function() {
  window.location.assign('Page_map.php');
});

login.addEventListener("click", function() {
  window.location.assign('Page_login.php');
});

announce.addEventListener("click", function() {
  window.location.assign('Page_announce.php');
});

card.addEventListener("click", function() {
  // window.location.assign('Page_card.php');
  alert("กรุณาเข้าสู่ระบบเพื่อดูข้อมูล");
  window.location.assign('Page_login.php');
});

// help.addEventListener("click", function() {
//   window.open('ไฟล์วิธีการใช้งาน', '_blank');
// });

// live.addEventListener("click", function() {
//   window.open('ลิ้งช่องทางการไลฟ์', '_blank');
// });

// picture.addEventListener("click", function() {
//   window.open('ลิ้งช่องทางรูปภาพ', '_blank');
// });