// Define global variables for tuin1, tuin2, and tuin3
let tuin1 = false;
let tuin2 = false;
let tuin3 = false;
let leftThumb = document.getElementById("thumbnail1");
let mainThumb = document.getElementById("thumbnail2");
let rightThumb = document.getElementById("thumbnail3");
mainThumb.classList.add('active');

document.addEventListener('DOMContentLoaded', function () {
    let slideIndex = 0;
    const slides = document.querySelector('.slides');
    const totalSlides = slides.children.length;
    const thumbnails = document.querySelectorAll('.thumbnail');

    function showSlides() {
        slideIndex++;
        if (slideIndex >= totalSlides) {
            slideIndex = 0;
        }
        updateSlidePosition();
        updateVariables(); 
        setTimeout(showSlides, 10000);
    }

    function changeSlide(n) {
        slideIndex += n;
        if (slideIndex >= totalSlides) {
            slideIndex = 0;
        } else if (slideIndex < 0) {
            slideIndex = totalSlides - 1;
        }
        updateSlidePosition();
        updateVariables(); 
    }

    function goToSlide(index) {
        slideIndex = index;
        updateSlidePosition();
        updateVariables(); 
    }

    function updateSlidePosition() {
        slides.style.transform = `translateX(-${slideIndex * 100}%)`;
    }

    function updateVariables() {
        tuin1 = slideIndex === 0;
        tuin2 = slideIndex === 1;
        tuin3 = slideIndex === 2;

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

        // Update the active state of the thumbnails
        thumbnails.forEach(thumbnail => thumbnail.classList.remove('active'));
        mainThumb.classList.add('active');
    }

    document.querySelector('.next').addEventListener('click', () => {
        changeSlide(1);
    });

    leftThumb.addEventListener('click', () => {
        changeSlide(-1); 
    });

    document.querySelector('.prev').addEventListener('click', () => {
        changeSlide(-1);
    });

    rightThumb.addEventListener('click', () => {
        changeSlide(1); 
    });

    showSlides();
    updateVariables();
});
