document.addEventListener('DOMContentLoaded', function () {
    var swiper = new Swiper('.testimonials-slider', {
        direction: 'horizontal', // Change direction to horizontal
        loop: true,
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
