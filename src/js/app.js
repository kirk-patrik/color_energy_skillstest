document.addEventListener("DOMContentLoaded", function () {
    // heading letter circle
    let headingCirc = document.querySelectorAll('.isCircle');
    headingCirc.forEach(item => {
        let newHTML = '';
        let splits = item.innerHTML.split('');
        splits.forEach(split => {
            newHTML += `<span>${split}</span>`;
        });
        item.innerHTML = newHTML;
    });
    document.querySelector('.scrollTop').addEventListener('click', () => {
        scrollToTop();
    });

    let hamburgerMenu = document.querySelector('.hamburger__menu');
    let spMenu = document.querySelector('.l-header__nav_menu-sp');

    hamburgerMenu.addEventListener('click', e => {
        e.target.parentElement.classList.toggle('isActive');
        spMenu.classList.toggle('isActive');
    });
});