
// --------------

// Fonction pour ajouter un observateur d'intersection sur le viewport et ajoute des classe name
function setupIntersectionObserver(selector, className, options = { threshold: 0.20 }) {
    const elements = document.querySelectorAll(selector);

    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                // Ajoute la classe pour l'animation
                entry.target.classList.add(className);

                // Une fois l'animation déclenchée, arrêter d'observer cet élément
                observer.unobserve(entry.target);
            }
        });
    }, options);

    elements.forEach(element => {
        observer.observe(element);
    });
}

document.addEventListener('DOMContentLoaded', function() {

    setupIntersectionObserver('.question','zoomed' , { threshold: 0.70 });
    setupIntersectionObserver('.avis h2','visible');
    setupIntersectionObserver('.partenaire h2','visible');
    setupIntersectionObserver('.ligne1', 'visible');
    setupIntersectionObserver('.ligne2', 'visible');
});
// --------------




