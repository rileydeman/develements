document.addEventListener('DOMContentLoaded', function() {
    let slideIndex = 0;
    const slides = document.querySelectorAll('.slide');
    const totalSlides = slides.length;

    function showSlides() {
        for (let i = 0; i < totalSlides; i++) {
            slides[i].style.display = 'none';
        }
        slideIndex++;
        if (slideIndex > totalSlides) {
            slideIndex = 1;
        }
        slides[slideIndex - 1].style.display = 'block';
        setTimeout(showSlides, 5000);
    }

    function changeSlide(n) {
        slideIndex += n;
        if (slideIndex > totalSlides) {
            slideIndex = 1;
        }
        if (slideIndex < 1) {
            slideIndex = totalSlides;
        }
        for (let i = 0; i < totalSlides; i++) {
            slides[i].style.display = 'none';
        }
        slides[slideIndex - 1].style.display = 'block';
    }

    document.querySelector('.next').addEventListener('click', () => {
        changeSlide(1);
    });

    document.querySelector('.prev').addEventListener('click', () => {
        changeSlide(-1);
    });

    showSlides();
});
