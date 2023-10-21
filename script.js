let menu = document.querySelector('menu-btn');
let navbar = document.querySelector('.header .navbar');

menu.onClick = () =>{
    menu.classList.toggle('fa-times');
    menu.classList.toggle('active');
};

window.onscroll = () =>{
    menu.classList.remove('fa-times');
    menu.classList.remove('active');
}