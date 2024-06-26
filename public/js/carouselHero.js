let currentIndexHero = 0;
const slides = [
    '.slide1',
    '.slide2',
    '.slide3'
];
const indicators = document.querySelectorAll('.indicator');
const carousel = document.querySelector('.carouselHero');

function showSlide(index) {
    // Masque toutes les diapo en retirant le premier caractere ".""
    slides.forEach(slide => carousel.classList.remove(slide.substring(1)));
    
    // Affiche la diapo actuelle
    carousel.classList.add(slides[index].substring(1));

    // Met à jour les indicateurs
    indicators.forEach(indicator => indicator.classList.remove('active'));
    indicators[index].classList.add('active');
}

function nextSlide() {
    currentIndexHero = (currentIndexHero + 1) % slides.length;
    showSlide(currentIndexHero);
}

indicators.forEach((indicator, index) => {
    indicator.addEventListener('click', () => {
        currentIndexHero = index;
        showSlide(index);
    });
});

setInterval(nextSlide, 5000); 

showSlide(currentIndexHero);
