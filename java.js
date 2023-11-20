const header = document.querySelector("header");

window.addEventListener("scroll" , function(){
	header.classList.toggle("sticky" , this.window.scrollY > 0);
})


let menu = document.querySelector('#menu-icon');
let navmenu = document.querySelector('.navmenu-icon');

menu.onclick = () => {
	menu.classList.toggle('bx-menu');
	navmenu.classList.toggle('open');
}