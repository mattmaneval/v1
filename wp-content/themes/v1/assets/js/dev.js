"use strict";

var menuButton = document.querySelector('.menu-button');
var menu = document.querySelector('.menu');

var openMenu = function openMenu() {
  menu.classList.toggle('open');
  menuButton.classList.toggle('menu-open');
};

menuButton.addEventListener('click', openMenu);