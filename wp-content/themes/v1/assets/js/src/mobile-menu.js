const menuButton = document.querySelector('.menu-button');
const menu = document.querySelector('.menu');
const menuLink = document.querySelectorAll('.menu-link');

// Closes menu when window is resized
const closeMenuOnResize = () => {
  menu.classList.remove('open');
  menuButton.classList.remove('menu-button-active');
  console.log("Im working...");
  window.removeEventListener('resize', closeMenuOnResize);
}

// Toggle menu & menu button
const toggleMenu = () => {
  menu.classList.toggle('open');
  menuButton.classList.toggle('menu-button-active');
  window.addEventListener('resize', closeMenuOnResize);
}

// Event Listeners
menuButton.addEventListener('click', toggleMenu);

menuLink.forEach(link =>
  link.addEventListener('click', toggleMenu)
);
