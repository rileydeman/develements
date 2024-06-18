const mobileMenu = document.getElementById('mobileMenu');
const navLinks = document.querySelector('.nav-links');

mobileMenu.addEeventListener('click', () => {
    navLinks.classList.toggle('active');
});