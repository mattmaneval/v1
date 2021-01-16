const menuButton = document.querySelector('.menu-button');
const menu = document.querySelector('.menu');
const menuLink = document.querySelectorAll('.menu-link');
// const socials = document.querySelector('.socials-bar');

const toggleMenu = () => {
  menu.classList.toggle('open');
  menuButton.classList.toggle('menu-button-active');
  // socials.classList.toggle('mobile-socials-bar');
}

menuButton.addEventListener('click', toggleMenu);

menuLink.forEach(link =>
  link.addEventListener('click', toggleMenu)
);
