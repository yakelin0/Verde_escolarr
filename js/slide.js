let currentIndex = 0;
const slides = document.querySelectorAll('.slide img');
const prevBtn = document.getElementById('prevBtn');
const nextBtn = document.getElementById('nextBtn');

// Inicializa el primer slide
slides[currentIndex].classList.add('active'); // Muestra la primera imagen

function showSlide(index) {
    slides.forEach((slide) => {
        slide.classList.remove('active'); // Oculta todas las imágenes
    });
    slides[index].classList.add('active'); // Muestra la imagen actual
}

function nextSlide() {
    currentIndex = (currentIndex + 1) % slides.length; // Ciclo a la primera imagen al llegar al final
    showSlide(currentIndex);
}

function prevSlide() {
    currentIndex = (currentIndex - 1 + slides.length) % slides.length; // Ciclo a la última imagen al llegar al principio
    showSlide(currentIndex);
}

// Cambia de slide cada 3 segundos
setInterval(nextSlide, 3000);

// Añadir eventos a los botones
nextBtn.addEventListener('click', nextSlide);
prevBtn.addEventListener('click', prevSlide);