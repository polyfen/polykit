<script>
document.addEventListener("DOMContentLoaded", function() {
    let currentPage = window.location.pathname;
    let navLinks = document.querySelectorAll('header nav a');
    navLinks.forEach(link => {
        if (link.getAttribute('href') === currentPage) {
            link.classList.add('current-page');
        }
    })
});
</script>

<script defer src="app/js/navbar.js"></script>
