/* eventListener para manejar en el NAV los botones en mobile */

const navOpener = document.querySelector('.nav-hamburger')
const navCloser = document.querySelector('.nav-close')
const headerNav = document.querySelector('.header-nav')
const navLinks = document.querySelector('.nav-links')

navOpener.addEventListener('click', () => {
    headerNav.classList.add('open-nav')
})
navCloser.addEventListener('click', () => {
    headerNav.classList.remove('open-nav')
})

const hellobar = document.querySelector('.hellobar');
const hellobarHeight = hellobar.offsetHeight;
if (!headerNav.classList.contains("fixed-position") && !headerNav.classList.contains("open-nav")) {
    headerNav.style.top = `${hellobarHeight + 20}px`;
}

headerNav.style.visibility = 'visible';

/* Agrega el .position-fixed al nav */

document.addEventListener("DOMContentLoaded", function () {
    let headerNav = document.querySelector('.header-nav');
    if (headerNav) {
        let body = document.querySelector("body");
        
        window.addEventListener("scroll", function () {
            let scroll = window.scrollY;
    
            if (window.innerWidth > 768) {
                if (scroll >= 60) {
                    headerNav.classList.add("position-fixed");
                } else {
                    headerNav.classList.remove("position-fixed");
                }
            }
    
            if (scroll >= 60) {
                headerNav.style.top = '20px';
            } else {
                if (body.classList.contains("landing-page")) {
                    headerNav.style.top = '20px';
                } else {
                    headerNav.style.top = `${hellobarHeight + 20}px`;
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


/* Accordions */

let acc=document.getElementsByClassName("acc-button");let i;for(i=0;i<acc.length;i++){acc[i].addEventListener("click",function(){this.classList.toggle("active");let panel=this.nextElementSibling;if(panel.style.maxHeight){panel.style.maxHeight=null;}
else{panel.style.maxHeight=panel.scrollHeight+"px";}});}