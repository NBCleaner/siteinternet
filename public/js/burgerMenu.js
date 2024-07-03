// MENU BURGER

const burgerIcon = document.querySelector("#burger-icon");

burgerIcon.addEventListener("click", event => {
    const navMenu = document.querySelector("nav");
    navMenu.classList.toggle("shown");
});


// DROPDOWN PRESTATIONS

const prestationsBtn = document.getElementById("dropdownPrestationsButton");
prestationsBtn.addEventListener("click", (event) => {
    const dropdownContent = document.getElementById("dropdownPrestationsContent");
    dropdownContent.classList.toggle("show");
});

window.addEventListener("click", (event) => {
    if (!event.target.matches("#dropdownPrestationsButton") && !event.target.matches("nav") && !event.target.matches("#burger-icon")) {
        const dropdownContent = document.getElementById("dropdownPrestationsContent");
        if (dropdownContent.classList.contains("show")) {
            dropdownContent.classList.remove("show");
        }
        const navMenu = document.querySelector("nav");
        if (navMenu.classList.contains("shown")) {
            navMenu.classList.remove("shown");
        }
    }
});