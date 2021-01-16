const menuButton = document.querySelector('.menu-button');
const menu = document.querySelector('.menu');
const header = document.querySelector('header');
const html = document.querySelector('html');

function toggleMenuButton() {
  menuButton.classList.toggle('menu-open');
}

function toggleMenu() {
  menu.classList.toggle('open');
  html.classList.toggle('overflow');
}

function openMenu() {
  toggleMenuButton();
  toggleMenu();
}

menuButton.addEventListener('click', openMenu);
