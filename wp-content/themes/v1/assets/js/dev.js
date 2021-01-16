"use strict";

var menuButton = document.querySelector('.menu-button');
var menu = document.querySelector('.menu');
var menuLink = document.querySelectorAll('.menu-link');

var toggleMenu = function toggleMenu() {
  menu.classList.toggle('open');
  menuButton.classList.toggle('menu-button-active');
};

menuButton.addEventListener('click', toggleMenu);
menuLink.forEach(function (link) {
  return link.addEventListener('click', toggleMenu);
});