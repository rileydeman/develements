document.addEventListener('DOMContentLoaded', function () {
    var swiper = new Swiper('.testimonials-slider', {
        direction: 'horizontal', // Set direction to horizontal
        loop: true, // Loop through testimonials
        spaceBetween: 5, // Add 5px gap between slides
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        autoplay: {
            delay: 5000,
            disableOnInteraction: false,
        },
    });
});
