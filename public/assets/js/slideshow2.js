// Definieer globale variabelen voor tuin1, tuin2 en tuin3
let tuin1 = false;
let tuin2 = false;
let tuin3 = false;

document.addEventListener('DOMContentLoaded', function () {
    let slideIndex = 0;
    const slides = document.querySelector('.slides');
    const totalSlides = slides.children.length;
    const thumbnails = document.querySelectorAll('.thumbnail');

    // Functie om de slides automatisch te laten zien
    function showSlides() {
        slideIndex++;
        if (slideIndex >= totalSlides) {
            slideIndex = 0;
        }
        updateSlidePosition();
        updateVariables(); // Update variables on automatic slide change
        setTimeout(showSlides, 5000);
    }

    // Functie om van slide te veranderen
    function changeSlide(n) {
        slideIndex += n;
        if (slideIndex >= totalSlides) {
            slideIndex = 0;
        } else if (slideIndex < 0) {
            slideIndex = totalSlides - 1;
        }
        updateSlidePosition();
        updateVariables(); // Update variables on manual slide change
    }

    // Functie om naar een specifieke slide te gaan
    function goToSlide(index) {
        slideIndex = index;
        updateSlidePosition();
        updateVariables(); // Update variables on manual slide change
    }

    // Functie om de positie van de slides bij te werken
    function updateSlidePosition() {
        slides.style.transform = `translateX(-${slideIndex * 100}%)`;
        thumbnails.forEach((thumb, index) => {
            thumb.classList.toggle('active', index === slideIndex);
        });
    }

    // Functie om de variabelen bij te werken op basis van de huidige slide
    function updateVariables() {
        tuin1 = slideIndex === 0;
        tuin2 = slideIndex === 1;
        tuin3 = slideIndex === 2;

        // Console logs om de status van de variabelen te tonen
        console.log(`tuin1: ${tuin1}, tuin2: ${tuin2}, tuin3: ${tuin3}`);
    }

    // Event listeners voor de volgende en vorige knoppen
    document.querySelector('.next').addEventListener('click', () => {
        changeSlide(1);
    });

    document.querySelector('.prev').addEventListener('click', () => {
        changeSlide(-1);
    });

    // Event listener voor elke thumbnail om naar de betreffende slide te gaan
    thumbnails.forEach((thumbnail, index) => {
        thumbnail.addEventListener('click', () => {
            goToSlide(index);
        });
    });

    // Start de automatische slideshow
    showSlides();

    // Update de variabelen bij het initiële laden
    updateVariables();
});

// Breakpoint code
document.addEventListener('DOMContentLoaded', function () {
    // Haal referenties naar de thumbnails op
    let leftThumb = document.getElementById("leftThumb");
    let mainThumb = document.getElementById("mainThumb");
    let rightThumb = document.getElementById("rightThumb");

    // Functie om de thumbnails bij te werken op basis van de variabelen tuin1, tuin2 en tuin3
    function updateThumbnails() {
        if (tuin1) {
            console.log("tuin1 werkt");
            tuin2 = false;
            tuin3 = false;

            leftThumb.src = mainThumb.src;
            mainThumb.src = rightThumb.src;
            rightThumb.src = leftThumb.src;
        }

        if (tuin2) {
            console.log("tuin2 werkt");
            tuin1 = false;
            tuin3 = false;

            mainThumb.src = mainThumb.src;
            leftThumb.src = leftThumb.src;
            rightThumb.src = rightThumb.src;
        }

        if (tuin3) {
            console.log("tuin3 werkt");
            tuin1 = false;
            tuin2 = false;

            rightThumb.src = mainThumb.src;
            mainThumb.src = leftThumb.src;
            leftThumb.src = rightThumb.src;
        }

        // Console logs om de status van de variabelen te tonen na de updates
        console.log(`After update - tuin1: ${tuin1}, tuin2: ${tuin2}, tuin3: ${tuin3}`);
    }

    // Voer updateThumbnails uit om te controleren welke tuin true is
    updateThumbnails();
});
