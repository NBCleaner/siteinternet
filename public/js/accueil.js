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

updateCarousel();

// -----------------------------------------------

// changement de style bouton deluxe pour les forfaits

const express = document.getElementById("express");
const deluxe = document.getElementById("deluxe");
const extraItems = document.querySelectorAll(".extra-deluxe");
const extraIcons = document.querySelectorAll(".extra-deluxe i"); 
const forfaitInt = document.querySelector(".forfait1")
const forfaitExt = document.querySelector(".forfait3")
const forfaitIntExt = document.querySelector(".forfait2")
const cardForfait1 = document.querySelector(".listeforfait1")
const cardForfait2 = document.querySelector(".listeforfait2")
const cardForfait3 = document.querySelector(".listeforfait3")




const white = "#FFFFFF"
const gold = "linear-gradient(to right, #BF953F, #E0C97D, #B38728, #EAD49F, #AA771C)";
const goldChek = "#DAA520"
const blue = "#143993"

deluxe.addEventListener("click",  function() {
deluxe.style.color = white
deluxe.style.background = gold
deluxe.style.zIndex = "2"
express.style.color = blue
express.style.background = white
forfaitInt.style.background = gold
forfaitExt.style.background = gold
forfaitIntExt.style.background = gold
cardForfait1.style.border = "1px solid gold"; 
cardForfait2.style.border = "1px solid gold"; 
cardForfait3.style.border = "1px solid gold"; 




extraItems.forEach(function(item) {
    item.style.display = "block";
});
extraIcons.forEach(function(icon) {
    icon.style.color = goldChek;
});
});

express.addEventListener("click", function(){
deluxe.style.color = blue
deluxe.style.background = white
deluxe.style.zIndex = "1"
express.style.color = white
express.style.background = blue
forfaitInt.style.background = blue
forfaitExt.style.background = blue
forfaitIntExt.style.background = blue
cardForfait1.style.border = "1px solid blue"; 
cardForfait2.style.border = "1px solid blue"; 
cardForfait3.style.border = "1px solid blue"; 

extraItems.forEach(function(item) {
    item.style.display = "none";
});
});

// -----------------------------------------------


// Effet de scroll js sur la page index


// Effet sur l'a section article 

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
    setupIntersectionObserver('article', 'visible');
    setupIntersectionObserver('.devisPc', 'visible');  
});

// -------------------------------------


document.addEventListener('DOMContentLoaded', function() {
    const container = document.querySelector('.carousel-container-pc');
    
    const handleZoom = (entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                container.querySelectorAll('div').forEach(div => {
                    div.classList.add('zoomed');
                });

                observer.unobserve(entry.target);
            }
        });
    };

    // Créer un observateur pour gérer le zoom
    const observer = new IntersectionObserver(handleZoom, {
        threshold: 0.7
    });

    // Observer la section entière (ou un élément spécifique si nécessaire)
    observer.observe(container);
});
