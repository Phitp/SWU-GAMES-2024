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
