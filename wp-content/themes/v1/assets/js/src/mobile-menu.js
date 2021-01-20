const menuButton = document.querySelector('.menu-button');
const nav = document.querySelector('nav');
const menuLink = document.querySelectorAll('.nav-link');
const body = document.querySelector('body');

// // Closes menu when window is resized
// const closeMenuOnResize = () => {
//   nav.classList.remove('open');
//   menuButton.classList.remove('menu-button-active');
//   body.classList.remove('no-scroll');
//   console.log("Im working...");
//   window.removeEventListener('resize', closeMenuOnResize);
// }
//
// // Toggle menu & menu button
// const toggleMenu = () => {
//   nav.classList.toggle('open');
//   menuButton.classList.toggle('menu-button-active');
//   body.classList.toggle('no-scroll');
//   window.addEventListener('resize', closeMenuOnResize);
// }

// Event Listeners
// menuButton.addEventListener('click', toggleMenu);
//
// menuLink.forEach(link =>
//   link.addEventListener('click', toggleMenu)
// );


//////////////////////



const toggleMenu = () => {

  function closeMenu() {
    nav.classList.remove('open');
    nav.classList.remove('fade-out');
  }

  function deactivateButton() {
    menuButton.classList.remove('menu-button-active');
  }

  if(nav.classList == "") {
    nav.classList.add('open');
    nav.classList.add('fade-in');
    menuButton.classList.add('menu-button-active');
    body.classList.add('no-scroll');
  } else {
    nav.classList.add('fade-out')
    nav.classList.remove('fade-in');
    body.classList.remove('no-scroll');
    setTimeout(closeMenu, 450);
    setTimeout(deactivateButton, 100);
  }
}

menuButton.addEventListener('click', toggleMenu );

menuLink.forEach(link =>
  link.addEventListener('click', toggleMenu)
);
