document.addEventListener("DOMContentLoaded", function () {
    const images = document.querySelectorAll(".slide");

    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                if (entry.target.dataset.side === "left") {
                    entry.target.style.transform = "translateX(0)";
                } else {
                    entry.target.style.transform = "translateX(0)";
                }
                entry.target.style.opacity = "1";
                observer.unobserve(entry.target); // Arrêter l'observation après l'animation
            }
        });
    }, { threshold: 0.5 });

    images.forEach((img, index) => {
        img.style.opacity = "0";
        img.style.transition = "transform 1s ease-out, opacity 1s ease-out";
        if (index % 2 === 0) {
            img.dataset.side = "left";
            img.style.transform = "translateX(-100%)";
        } else {
            img.dataset.side = "right";
            img.style.transform = "translateX(100%)";
        }
        observer.observe(img);
    });
});


document.addEventListener("DOMContentLoaded", function () {
    const bg = document.querySelector(".bg-zoom");

    function zoomIn() {
        bg.style.backgroundSize = "110%";
    }

    function zoomOut() {
        bg.style.backgroundSize = "100%";
    }

    setInterval(() => {
        zoomIn();
        setTimeout(zoomOut, 3000); // Reviens à la taille normale après 3s
    }, 6000); // Répète toutes les 6 secondes
});

