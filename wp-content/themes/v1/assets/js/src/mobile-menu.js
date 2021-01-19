const menuButton = document.querySelector('.menu-button');
const nav = document.querySelector('nav');
const menuLink = document.querySelectorAll('.menu-link');
const body = document.querySelector('body');

// Closes menu when window is resized
const closeMenuOnResize = () => {
  nav.classList.remove('open');
  menuButton.classList.remove('menu-button-active');
  body.classList.remove('no-scroll');
  console.log("Im working...");
  window.removeEventListener('resize', closeMenuOnResize);
}

// Toggle menu & menu button
const toggleMenu = () => {
  nav.classList.toggle('open');
  menuButton.classList.toggle('menu-button-active');
  body.classList.toggle('no-scroll');
  window.addEventListener('resize', closeMenuOnResize);
}

// Event Listeners
menuButton.addEventListener('click', toggleMenu);

menuLink.forEach(link =>
  link.addEventListener('click', toggleMenu)
);
