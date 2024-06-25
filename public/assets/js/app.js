document.addEventListener('DOMContentLoaded', function () {
        var swiper = new Swiper('.swiper-container', {
            direction: 'vertical',
            loop: true,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
            },
            effect: 'slide',
        });
    });

