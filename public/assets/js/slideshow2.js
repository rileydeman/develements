// Definieer globale variabelen voor tuin1, tuin2 en tuin3
let tuin1 = false;
let tuin2 = false;
let tuin3 = false;
let leftThumb = document.getElementById("leftThumb");
let mainThumb = document.getElementById("mainThumb");
let rightThumb = document.getElementById("rightThumb");
mainThumb.classList.add('active');


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
        setTimeout(showSlides, 10000);
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
    }

    // Functie om de variabelen bij te werken op basis van de huidige slide
    function updateVariables() {
        tuin1 = slideIndex === 0;
        tuin2 = slideIndex === 1;
        tuin3 = slideIndex === 2;
    
        // Update thumbnails based on the current slide
        if (tuin1) {
            console.log("tuin1 works");
            tuin2 = false;
            tuin3 = false;
    
            leftThumb.src = slides.children[2].querySelector('img').src;
            mainThumb.src = slides.children[0].querySelector('img').src;
            rightThumb.src = slides.children[1].querySelector('img').src;
        }
    
        if (tuin2) {
            console.log("tuin2 works");
            tuin1 = false;
            tuin3 = false;
    
            leftThumb.src = slides.children[0].querySelector('img').src;
            mainThumb.src = slides.children[1].querySelector('img').src;
            rightThumb.src = slides.children[2].querySelector('img').src;
        }
    
        if (tuin3) {
            console.log("tuin3 works");
            tuin1 = false;
            tuin2 = false;
    
            leftThumb.src = slides.children[1].querySelector('img').src;
            mainThumb.src = slides.children[2].querySelector('img').src;
            rightThumb.src = slides.children[0].querySelector('img').src;
        }
    }

    // Event listeners voor de volgende en vorige knoppen
    document.querySelector('.next').addEventListener('click', () => {
        changeSlide(1);
    });

    document.getElementById('leftThumb').addEventListener('click', () => {
        changeSlide(-1); // Adjust the direction of slide change as needed
    });

    document.querySelector('.prev').addEventListener('click', () => {
        changeSlide(-1);
    });

    document.getElementById('rightThumb').addEventListener('click', () => {
        changeSlide(1); // Adjust the direction of slide change as needed
    });


    // Start de automatische slideshow
    showSlides();

    // Update de variabelen bij het initiële laden
    updateVariables();
});


