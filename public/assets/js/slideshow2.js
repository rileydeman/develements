document.addEventListener('DOMContentLoaded', function() {
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
        setTimeout(showSlides, 5000); 
    }

    function changeSlide(n) {
        slideIndex += n;
        if (slideIndex >= totalSlides) {
            slideIndex = 0;
        } else if (slideIndex < 0) {
            slideIndex = totalSlides - 1;
        }
        updateSlidePosition();
    }

    function goToSlide(index) {
        slideIndex = index;
        updateSlidePosition();
    }

    function updateSlidePosition() {
        slides.style.transform = `translateX(-${slideIndex * 100}%)`;
        thumbnails.forEach((thumb, index) => {
            thumb.classList.toggle('active', index === slideIndex);
        });
    }

    document.querySelector('.next').addEventListener('click', () => {
        changeSlide(1);
    });

    document.querySelector('.prev').addEventListener('click', () => {
        changeSlide(-1);
    });

    thumbnails.forEach((thumbnail, index) => {
        thumbnail.addEventListener('click', () => {
            goToSlide(index);
        });
    });

    showSlides();
});
