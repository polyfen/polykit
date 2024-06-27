<!-- Global CSS -->
<link rel="stylesheet" href="app/css/polykit-v0-2.css" type="text/css">
<link rel="stylesheet" href="app/css/custom-styles-pk.css" type="text/css">

<!-- Scripts -->
<script defer src="app/js/navbar.js"></script>
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


