/* LOGIN HEADER */

let navbar = document.querySelector('.navbar');

document.querySelector('#menu-btn').onclick = () =>{
    navbar.classList.toggle('active');
    loginForm.classList.remove('active');
}

window.onscroll = () =>{
    navbar.classList.remove('active');
    loginForm.classList.remove('active');
}

/* SECCION INFO */

const mas_info = document.querySelectorAll('.mas');

mas_info.forEach(mas => {
    mas.addEventListener('click', () => {
        mas.classList.toggle('open');

        //CAMBIO DE ICONO
        const icon = mas.querySelector('.mas_icon i');
        if (icon.className === 'fa-solid fa-plus'){
            icon.className = "fa-solid fa-minus"
        } else {
            icon.className = "fa-solid fa-plus"
        }
    })
})
