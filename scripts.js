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

// score table
// Sample data
const data = [
  { rank: 1, school: "อนุบาลศรีประชานุเคราะห์", gold: 13, silver: 1, bronze: 1, total: 15 },
  { rank: 2, school: "บ้านเรือใหญ่", gold: 4, silver: 3, bronze: 5, total: 12 },
  { rank: 3, school: "บ้านสำโรงพลัน", gold: 4, silver: 1, bronze: 4, total: 9 },
  { rank: 4, school: "บ้านปราสาท", gold: 3, silver: 3, bronze: 2, total: 8 },
  { rank: 5, school: "วาสสวรรค์", gold: 2, silver: 3, bronze: 2, total: 7 },
  { rank: 6, school: "บ้านเรือคัน", gold: 2, silver: 2, bronze: 3, total: 7 },
  { rank: 7, school: "บ้านโคกตลาด", gold: 1, silver: 3, bronze: 3, total: 7 },
  { rank: 8, school: "บ้านกันจาน", gold: 0, silver: 5, bronze: 2, total: 7 },
  { rank: 9, school: "บ้านไพรพัฒนา", gold: 2, silver: 1, bronze: 3, total: 6 },
  { rank: 10, school: "บ้านเกาะกระโพธิ์", gold: 0, silver: 2, bronze: 4, total: 6 },
];

// Pagination variables
let currentPage = 1;
let rowsPerPage = 10;

function displayTable() {
  const tableBody = document.getElementById("table-body");
  tableBody.innerHTML = "";

  const start = (currentPage - 1) * rowsPerPage;
  const end = start + rowsPerPage;
  const paginatedData = data.slice(start, end);

  paginatedData.forEach(row => {
    const tr = document.createElement("tr");
    tr.innerHTML = `
      <td>${row.rank}</td>
      <td>${row.school}</td>
      <td>${row.gold}</td>
      <td>${row.silver}</td>
      <td>${row.bronze}</td>
      <td>${row.total}</td>
    `;
    tableBody.appendChild(tr);
  });
}

function setupPagination() {
  const prevPage = document.getElementById("prev-page");
  const nextPage = document.getElementById("next-page");
  const currentPageDisplay = document.getElementById("current-page");

  prevPage.onclick = () => {
    if (currentPage > 1) {
      currentPage--;
      currentPageDisplay.textContent = currentPage;
      displayTable();
    }
  };

  nextPage.onclick = () => {
    if (currentPage * rowsPerPage < data.length) {
      currentPage++;
      currentPageDisplay.textContent = currentPage;
      displayTable();
    }
  };
}

document.getElementById("entries").onchange = function () {
  rowsPerPage = parseInt(this.value);
  currentPage = 1;
  document.getElementById("current-page").textContent = currentPage;
  displayTable();
};

document.getElementById("search").oninput = function () {
  const query = this.value.toLowerCase();
  const filteredData = data.filter(row =>
    row.school.toLowerCase().includes(query)
  );

  const tableBody = document.getElementById("table-body");
  tableBody.innerHTML = "";
  filteredData.forEach(row => {
    const tr = document.createElement("tr");
    tr.innerHTML = `
      <td>${row.rank}</td>
      <td>${row.school}</td>
      <td>${row.gold}</td>
      <td>${row.silver}</td>
      <td>${row.bronze}</td>
      <td>${row.total}</td>
    `;
    tableBody.appendChild(tr);
  });
};

// Initialize table and pagination
displayTable();
setupPagination();