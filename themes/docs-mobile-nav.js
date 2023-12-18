console.log("Soy el docs-mobile-nav.js");

/* Mobile nav */

const opener = document.querySelector('.hamburger')
const closer = document.querySelector('.close')
const nav = document.getElementById('navbar')
let navItems = navbar.querySelectorAll("li");


opener.addEventListener('click', () => {
	nav.classList.add('open-nav')
	closer.classList.add('open-nav')
	opener.classList.add('close-nav')
})
closer.addEventListener('click', () => {
	nav.classList.remove('open-nav')
	closer.classList.remove('open-nav')
	opener.classList.remove('close-nav')
})

if (window.innerWidth <= 768) {
    navItems.forEach(item => {
        item.addEventListener('click', () => {
            nav.classList.remove('open-nav');
            closer.classList.remove('open-nav');
            opener.classList.remove('close-nav');
        });
    });
}

/* hamburge menu scroll obdserver */
document.addEventListener("DOMContentLoaded", function() {
    let hamburger = document.querySelector(".hamburger");
    let close = document.querySelector(".close");

    window.addEventListener("scroll", function() {
        let scroll = window.scrollY || document.documentElement.scrollTop;

        if (window.innerWidth < 426) {
            if (scroll >= 40) {
                console.log("scroll");
                hamburger.style.top = "12px";
                close.style.top = "12px";
            } else {
                hamburger.style.top = "47px";
                close.style.top = "47px";
            }
        }
    });
});



/* Mobile nav Scroll observer for nav-title active */
const menuItems = document.querySelectorAll('#navbar ul li a');
const observer = new IntersectionObserver((entries) => {
	entries.forEach((entry) => {
		const targetId = entry.target.getAttribute('id');
		if (entry.isIntersecting) {
			menuItems.forEach((menuItem) => {
				menuItem.classList.remove('active');
				if (menuItem.getAttribute('href') === `#${targetId}`) {
					menuItem.classList.add('active');
				}
			});
		}
	});
}, {
	threshold: 0.3
});

const sections = document.querySelectorAll('section');
sections.forEach((section) => {
	observer.observe(section);
});