document.addEventListener('DOMContentLoaded', function() {
    
    const menuButton = document.querySelector('.menu-button');
    const navItems = document.querySelector('.nav-items');
    const closeNavButton = document.querySelector('.close-nav-button');

    menuButton.addEventListener('click', toggleNav);
    closeNavButton.addEventListener('click', closeNav);

    function toggleNav() {
        navItems.classList.toggle('nav-items-show');
    }
    function closeNav() {
        navItems.classList.remove('nav-items-show');
    }
})