// https://maps.googleapis.com/maps/api/place/details/json?place_id=ChIJzbw80qiN3EcRSTM3nMT40Cc

function initMap() {
    let service = new google.maps.places.PlacesService(document.createElement('div.map'));

    const request = {
        placeId: "ChIJzbw80qiN3EcRSTM3nMT40Cc",
        fields: ["reviews"]
    };
    service.getDetails(request, (place, status) => {
        place.reviews.forEach(element => {
            console.log(`nom: ${element.author_name}, note: ${element.rating}, texte: ${element.text}`);
        });
    });
}

window.initMap = initMap;