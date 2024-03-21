console.log("ja sam docs-mobile-nav.js");

/* Mobile nav */
document.addEventListener('DOMContentLoaded', function () {
    let navbar = document.getElementById("navbar");
    let opener = document.getElementById("opener");
    let navItems = navbar.querySelectorAll("li");

    opener.addEventListener('click', function () {
        toggle();
    });

    navItems.forEach(function (item) {
        item.addEventListener('click', function () {
            toggle();
        });
    });

    function toggle() {
        if (window.innerWidth <= 768) {
            let computedStyle = window.getComputedStyle(navbar);
            if (computedStyle.right === "-280px") {
                navbar.style.right = "0px";
            } else {
                navbar.style.right = "-280px";
            }
        }
    }
});

/* Mobile nav Scroll observer */
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