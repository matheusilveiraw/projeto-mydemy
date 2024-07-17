const mobileMenu = document.getElementById('mobile-menu');
const dropdownMenu = document.getElementById('dropdown-menu');

mobileMenu.addEventListener('click', () => {
    mobileMenu.classList.toggle('open');
    dropdownMenu.classList.toggle('open');
});