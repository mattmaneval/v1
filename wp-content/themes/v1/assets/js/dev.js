"use strict";

var menuButton = document.querySelector('.menu-button');
var menu = document.querySelector('.menu');
var menuLink = document.querySelectorAll('.menu-link');
var body = document.querySelector('body'); // Closes menu when window is resized

var closeMenuOnResize = function closeMenuOnResize() {
  menu.classList.remove('open');
  menuButton.classList.remove('menu-button-active');
  body.classList.remove('no-scroll'); // console.log("Im working...");

  window.removeEventListener('resize', closeMenuOnResize);
}; // Toggle menu & menu button


var toggleMenu = function toggleMenu() {
  menu.classList.toggle('open');
  menuButton.classList.toggle('menu-button-active');
  body.classList.toggle('no-scroll');
  window.addEventListener('resize', closeMenuOnResize);
}; // Event Listeners


menuButton.addEventListener('click', toggleMenu);
menuLink.forEach(function (link) {
  return link.addEventListener('click', toggleMenu);
});