/* eventListener para manejar en el NAV los botones en mobile */

const navOpener = document.querySelector('.nav-hamburger')
const navCloser = document.querySelector('.nav-close')
const nav = document.querySelector('nav')
const navLinks = document.querySelector('.nav-links')

navOpener.addEventListener('click', () => {
    nav.classList.add('open-nav')
})
navCloser.addEventListener('click', () => {
    nav.classList.remove('open-nav')
})

const hellobar = document.querySelector('.hellobar');
const hellobarHeight = hellobar.offsetHeight;
if (!nav.classList.contains("fixed-position") && !nav.classList.contains("open-nav")) {
    nav.style.top = `${hellobarHeight + 20}px`;
}

/* Agrega el .position-fixed al nav */

document.addEventListener("DOMContentLoaded", function () {
    let nav = document.querySelector('nav');
    if (nav) {
        let body = document.querySelector("body");
        
        window.addEventListener("scroll", function () {
            let scroll = window.scrollY;
    
            if (window.innerWidth > 768) {
                if (scroll >= 60) {
                    nav.classList.add("position-fixed");
                } else {
                    nav.classList.remove("position-fixed");
                }
            }
    
            if (scroll >= 60) {
                nav.style.top = '20px';
            } else {
                if (body.classList.contains("landing-page")) {
                    nav.style.top = '20px';
                } else {
                    nav.style.top = `${hellobarHeight + 20}px`;
                }
            }
        });
    }
});

/* end position fixed on nav */

/* Current Page */

document.addEventListener("DOMContentLoaded", function () {
    let currentPage = window.location.pathname;
    let navLinks = document.querySelectorAll('nav a');
    navLinks.forEach(link => {
        if (link.getAttribute('href') === currentPage) {
            link.classList.add('current-page');
        }
    })
});

/* End Current Page */