
// const placeId = 'NB+Cleaner+Auto'; 
// const apiKey = 'AIzaSyD3sS0X_WEsENunWhDPZTW8FI0x2H9WKHU';

// function getPlaceReviews(placeId, apiKey) {
//     // URL de l'API Google Places pour récupérer les détails de la place
//     let apiUrl = 'https://maps.googleapis.com/maps/api/place/details/json?place_id=' + placeId + '&fields=reviews&key=' + apiKey;

//     // Effectuer une requête HTTP GET à l'API
//     fetch(apiUrl)
//         .then(response => response.json())
//         .then(data => {
//             if (data.result && data.result.reviews) {
//                 // Récupérer les avis de la réponse JSON
//                 let reviews = data.result.reviews;

//                 // Afficher les avis dans la console
//                 console.log('Avis du lieu avec ID', placeId);
//                 reviews.forEach(review => {
//                     console.log('Avis:', review.text);
//                     console.log('Note:', review.rating);
//                 });
//             } else {
//                 console.error('Impossible de récupérer les avis pour cette entreprise.');
//             }
//         })
//         .catch(error => {
//             console.error('Erreur lors de la récupération des avis:', error);
//         });
// }

// // Appeler la fonction pour récupérer les avis
// getPlaceReviews(placeId, apiKey);