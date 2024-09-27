// Menu burger
const menuIcon = document.querySelector('.menu__icon');
const menuBody = document.querySelector('.menu__body');
const menuLinks = document.querySelectorAll('.menu_list a');

if (menuIcon) {
    menuIcon.addEventListener("click", function(e) {
        document.body.classList.toggle('_lock');
        menuIcon.classList.toggle('_active');
        menuBody.classList.toggle('_active');
    });
}

menuLinks.forEach(link => {
    link.addEventListener("click", function() {
        document.body.classList.remove('_lock');
        menuIcon.classList.remove('_active');
        menuBody.classList.remove('_active');
    });
});

// Add class active to active button
const menuItems = document. querySelectorAll(".menu-item");
const menuItemHome = document.querySelector(".menu-item-home")

function setActiveBtnInHeader(activeBtnInHeader) {
    menuItems.forEach(menuItem => {
        menuItem.classList.remove('active');
    });

    activeBtnInHeader.classList.add('active');
}

setActiveBtnInHeader(menuItemHome);

menuItems.forEach(menuItem => {
    menuItem.addEventListener('click', () => {
        setActiveBtnInHeader(menuItem)
    }); 
});