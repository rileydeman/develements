let slideIndex = 0;
const slides = document.querySelectorAll('.slide');
const showSlide = (index) => {
    slides.forEach((slide, i) => {
        slide.style.display = i === index ? 'block' : 'none';
    });
};

const plusSlides = (n) => {
    slideIndex += n;
    if (slideIndex >= slides.length) {
        slideIndex = 0;
    } else if (slideIndex < 0) {
        slideIndex = slides.length - 1;
    }
    showSlide(slideIndex);
};

const autoShowSlides = () => {
    plusSlides(1);
    setTimeout(autoShowSlides, 3000); // Change slide every 3 seconds
};

document.addEventListener('DOMContentLoaded', () => {
    showSlide(slideIndex);
    autoShowSlides();
});
