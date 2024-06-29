<!-- Global CSS -->
<link rel="stylesheet" href="app/css/polykit-v0-3.css" type="text/css">

<!-- Scripts -->
<script defer src="app/js/polykit-v0-3.js"></script>
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


