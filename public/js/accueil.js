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


const white = "#FFFFFF"
const gold = "#DAA520"
const blue = "#143993"

deluxe.addEventListener("click",  function() {
deluxe.style.color = white
deluxe.style.background = gold
deluxe.style.zIndex = "2"
express.style.color = blue
express.style.background = white

extraItems.forEach(function(item) {
    item.style.display = "block";
});
extraIcons.forEach(function(icon) {
    icon.style.color = gold;
});
});

express.addEventListener("click", function(){
deluxe.style.color = blue
deluxe.style.background = white
deluxe.style.zIndex = "1"
express.style.color = white
express.style.background = blue

extraItems.forEach(function(item) {
    item.style.display = "none";
});
});

// -----------------------------------------------