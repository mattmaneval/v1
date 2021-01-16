const menuButton = document.querySelector('.menu-button');
const menu = document.querySelector('.menu');

function toggleMenuButton() {
  menuButton.classList.toggle('menu-open');
}

function toggleMenu() {
  menu.classList.toggle('open');
}

function openMenu() {
  toggleMenuButton();
  toggleMenu();
}

menuButton.addEventListener('click', openMenu);
