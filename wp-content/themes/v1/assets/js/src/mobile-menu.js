const menuButton = document.querySelector('.menu-button');
const menu = document.querySelector('.menu');
const menuLink = document.querySelectorAll('.menu-link');

const toggleMenu = () => {
  menu.classList.toggle('open');
  menuButton.classList.toggle('menu-button-active');
}

menuButton.addEventListener('click', toggleMenu);

menuLink.forEach(link =>
  link.addEventListener('click', toggleMenu)
);
