// Carrousel prestations 
const leftArrowTop = document.getElementById("left-arrow-top");
const rightArrowTop = document.getElementById("right-arrow-top");
const prestationItems = document.querySelectorAll(".container-prestationsPc > div");
const visibleItemsCount = 3;
let currentIndex = 0;

function updateCarousel() {
    prestationItems.forEach((item, index) => {
        if (index >= currentIndex && index < currentIndex + visibleItemsCount) {
            item.style.display = "flex";
        } else {
            item.style.display = "none";
        }
    });
}

rightArrowTop.addEventListener("click", function(){

    leftArrowTop.style.display = "flex"
    if (currentIndex + visibleItemsCount < prestationItems.length) {
        currentIndex++;

        updateCarousel();
    }
});

leftArrowTop.addEventListener("click", function (){
    if(currentIndex != 0){
        currentIndex--;
        updateCarousel();
    }else{
        leftArrowTop.style.display = "none"
    }
});

// prestationItems.forEach((item) => {
//     item.addEventListener ("mouseenter", function (){
//         item.style.transform = "scale(1.2)";
//     });
// });


updateCarousel();

// -----------------------------------------------

function initMap() {
    let service = new google.maps.places.PlacesService(document.createElement('div.map'));

    const request = {
        placeId: "ChIJzbw80qiN3EcRSTM3nMT40Cc",
        fields: ["reviews"]
    };
    service.getDetails(request, (place, status) => {
        if (status === google.maps.places.PlacesServiceStatus.OK && place.reviews) {
            displayReviewsCarousel(place.reviews);
        } else {
            console.error('Impossible de récupérer les avis pour cette entreprise.');
        }
    });
}

function displayReviewsCarousel(reviews) {
    let currentIndex = 0; // Indice de l'avis actuellement affiché

    // Fonction pour créer une carte d'avis
    function createReviewCard(review) {
        const reviewCard = document.createElement('div');
        reviewCard.classList.add('review-card');

        const authorName = document.createElement('p');
        authorName.textContent = `Auteur : ${review.author_name}`;

        const rating = document.createElement('p');
        rating.textContent = `Note : ${review.rating} étoiles`;



        const starsContainer = document.createElement('div');
        starsContainer.classList.add('stars-container');
        for (let i = 0; i < review.rating; i++) {
            const star = document.createElement('i');
            star.classList.add('fas', 'fa-star');
            starsContainer.appendChild(star);

        }
        rating.appendChild(starsContainer);

        const text = document.createElement('p');
        text.textContent = `Avis : ${review.text}`;

        reviewCard.appendChild(authorName);
        reviewCard.appendChild(rating);
        reviewCard.appendChild(text);

        return reviewCard;
    }

    // Fonction pour afficher l'avis à l'indice spécifié
    function showReview(index) {
        const reviewContainer = document.querySelector('.review-container');
        reviewContainer.innerHTML = ''; // Effacer le contenu précédent

        const reviewCard = createReviewCard(reviews[index]);
        reviewContainer.appendChild(reviewCard);
    }

    // Fonction pour passer à l'avis suivant
    function nextReview() {
        currentIndex++;
        const reviewsCount = reviews.length;
        if (currentIndex >= reviewsCount) {
            currentIndex = 0; // Revenir au premier avis s'il n'y a pas d'avis suivant
        }
        showReview(currentIndex);
    }

    // Fonction pour passer à l'avis précédent
    function prevReview() {
        currentIndex--;
        const reviewsCount = reviews.length;
        if (currentIndex < 0) {
            currentIndex = reviewsCount - 1; // Aller au dernier avis s'il n'y a pas d'avis précédent
        }
        showReview(currentIndex);
    }


    document.querySelector('.left-arrow').addEventListener('click', prevReview);
    document.querySelector('.right-arrow').addEventListener('click', nextReview);

    // Afficher le premier avis au chargement de la page
    showReview(currentIndex);
}

window.initMap = initMap;
