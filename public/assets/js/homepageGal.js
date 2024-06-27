let currentIndex = 0;

const images = document.querySelectorAll('.carousel-images img');
const totalImages = images.length;

document.querySelector('.carousel-button.next').addEventListener('click', () => {
    currentIndex = (currentIndex + 1) % totalImages;
    updateCarousel();
});

document.querySelector('.carousel-button.prev').addEventListener('click', () => {
    currentIndex = (currentIndex - 1 + totalImages) % totalImages;
    updateCarousel();
});

function updateCarousel() {
    const offset = -currentIndex * 100;
    images.forEach(img => {
        img.style.transform = `translateX(${offset}%)`;
    });
}

updateCarousel();
