// slider.js
const slideContainer = document.querySelector('.slide');
let index = 0;

function showNextSlide() {
    index++;
    if (index >= slideContainer.children.length) {
        index = 0;
    }
    slideContainer.style.transform = `translateX(${-index * 100}%)`;
}

setInterval(showNextSlide, 3000);