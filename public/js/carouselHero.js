// Récupére les éléments une fois le DOM chargé
document.addEventListener('DOMContentLoaded', function() {
    let currentIndexHero = 0;
    const slides = [
        '.slide1',
        '.slide2',
        '.slide3'
    ];
    const indicators = document.querySelectorAll('.indicator');
    const carousel = document.querySelector('.carouselHero');

    // Ajoute les éléments de diapositive dynamiquement
    slides.forEach((slide, index) => {
        const slideElement = document.createElement('div');
        slideElement.classList.add('slide');
        slideElement.classList.add(slide.substring(1));
        if (index === 0) {
            slideElement.classList.add('active');
        }
        carousel.appendChild(slideElement);
    });

    function updateIndicators() {
        indicators.forEach((indicator, index) => {
            indicator.addEventListener('click', () => {
                currentIndexHero = index;
                showSlide(currentIndexHero);
            });
        });
    }

    function showSlide(index) {
        const allSlides = document.querySelectorAll('.carouselHero .slide');

        // Masque toutes les diapos
        allSlides.forEach(slide => slide.classList.remove('active'));

        // Affiche la diapo actuelle
        allSlides[index].classList.add('active');

        // Met à jour les indicateurs
        indicators.forEach(indicator => indicator.classList.remove('active'));
        indicators[index].classList.add('active');
    }

    function nextSlide() {
        currentIndexHero = (currentIndexHero + 1) % slides.length;
        showSlide(currentIndexHero);
    }

    updateIndicators();

    setInterval(() => {
        nextSlide();
        updateIndicators();
    }, 5000);

    // Affiche la première diapositive initialement
    showSlide(currentIndexHero);
});
