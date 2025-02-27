document.addEventListener("DOMContentLoaded", function () {
    const slider = document.querySelector(".slider");
    const slides = document.querySelectorAll("#card-slide");
    const slideWidth = slides[0].clientWidth;
    
    let index = 0;
    
    function slideImages() {
        index++;
        if (index >= slides.length) {
            index = 0;
        }
        slider.style.transform = "translateX(-" + (index * slideWidth) + "px)";

    }

    setInterval(slideImages, 2000); // Change d’image toutes les 2s
});
