const menuButton = document.querySelector('.menu-button');
const menu = document.querySelector('.menu');

const openMenu = () => {
  menu.classList.toggle('open');
  menuButton.classList.toggle('menu-open');
}

menuButton.addEventListener('click', openMenu);
