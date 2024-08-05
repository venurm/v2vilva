// Show and hide menu functionality
const navMenu = document.getElementById('nav-menu'),
    navToggle = document.getElementById('nav-toggle'),
    navClose = document.getElementById('nav-close');

/* Menu show */
if(navToggle){
    navToggle.addEventListener('click', () =>{
        navMenu.classList.add('show-menu');
    });
}

/* Menu hidden */
if(navClose){
    navClose.addEventListener('click', () =>{
        navMenu.classList.remove('show-menu');
    });
}
function toggleSubMenu(menuId, event) {
    // Prevent the event from bubbling up to parent menu items
    if (event) event.stopPropagation();

    const currentMenu = document.getElementById(menuId);
    const currentItem = currentMenu.closest('.menu-item, .primary-menu-item');
    const isVisible = currentMenu.style.display === 'block';

    // Close all sibling dropdowns but not the parent
    const siblingMenus = Array.from(currentItem.parentNode.children)
        .filter(child => child !== currentItem)
        .map(child => child.querySelector('.dropdown-menu1'));
    
    siblingMenus.forEach(menu => {
        if (menu) {
            menu.style.display = 'none';
            menu.style.maxHeight = '0';
            menu.style.opacity = '0';
            menu.closest('.menu-item, .primary-menu-item').classList.remove('active');
        }
    });

    // Reset all sibling indicators but not the parent
    siblingMenus.forEach(menu => {
        const indicator = menu?.closest('.menu-item, .primary-menu-item')?.querySelector('.submenu-indicator');
        if (indicator) {
            indicator.style.transform = 'rotate(0)';
        }
    });

    // Toggle the current menu
    if (!isVisible) {
        currentMenu.style.display = 'block';
        currentMenu.style.maxHeight = 'fit-content';
        currentMenu.style.opacity = '1';
        currentItem.classList.add('active');

        const indicator = currentItem.querySelector('.submenu-indicator');
        if (indicator) {
            indicator.style.transform = 'rotate(45deg)';
        }
    } else {
        currentMenu.style.display = 'none';
        currentMenu.style.maxHeight = '0';
        currentMenu.style.opacity = '0';
        currentItem.classList.remove('active');

        const indicator = currentItem.querySelector('.submenu-indicator');
        if (indicator) {
            indicator.style.transform = 'rotate(0)';
        }
    }
}

// Optional: close all dropdowns if clicking outside
document.addEventListener('click', (e) => {
    if (!e.target.closest('.primary-menu-item, .menu-item')) {
        document.querySelectorAll('.dropdown-menu1').forEach(menu => {
            menu.style.display = 'none';
            menu.style.maxHeight = '0';
            menu.style.opacity = '0';
        });
        document.querySelectorAll('.submenu-indicator').forEach(indicator => {
            indicator.style.transform = 'rotate(0)';
        });
    }
});
