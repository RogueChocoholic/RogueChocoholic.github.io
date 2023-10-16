var menuContainer = document.getElementById("menuContainer");
var filterMenuButton = document.getElementById("filterMenuButton");
var filterMenu = document.getElementById("filterMenu2");
var w = window.innerWidth;

function manualDropdown() {
    menuContainer.style.display = "block";

}


function dropDownOver() {
    menuContainer.style.display = "none";
}

function filterOpen() {
    filterMenu.style.display = "flex";
}

function filterClose() {
    filterMenu.style.display = "none";
}

function screensize() {
    alert(window.innerWidth);
}