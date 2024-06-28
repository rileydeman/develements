const carouselImages = document.querySelector('.carousel-images');
        const images = document.querySelectorAll('.carousel-images img');
        const prevButton = document.querySelector('.carousel-button.prev');
        const nextButton = document.querySelector('.carousel-button.next');

        let index = 0;

        function showImage(index) {
            const offset = -index * 100;
            carouselImages.style.transform = `translateX(${offset}%)`;
        }

        prevButton.addEventListener('click', () => {
            index = (index > 0) ? index - 1 : images.length - 1;
            showImage(index);
        });

        nextButton.addEventListener('click', () => {
            index = (index < images.length - 1) ? index + 1 : 0;
            showImage(index);
        });