// MENU BURGER

const burgerIcon = document.querySelector("#burger-icon");

burgerIcon.addEventListener("click", event => {
    const navMenu = document.querySelector("nav");
    navMenu.classList.toggle("shown");
});