<!DOCTYPE html>
<html lang="en">

    <head>
        <title>Docs | Polykit</title>

        <?php include 'includes/_head.php'; ?>

        <!-- META General -->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta property="og:type" content="website" />
        <meta name="author" content="The Polyfen Group LLC" />

        <!-- FAVICON -->
        <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
        <link rel="manifest" href="/site.webmanifest">
        <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#1f8df0">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="theme-color" content="#ffffff">

        <!-- FONTS -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link
            href="https://fonts.googleapis.com/css2?family=Figtree:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
            rel="stylesheet">

            <!-- Style Sheets CSS -->

            <!-- js -->
            <script defer src="/app/js/tab-panels.js"></script>

        <!-- Google Tag Manager -->
        <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-5ZXG85V7');
        </script>
        <!-- End Google Tag Manager -->
        </head>


    </head>

    <body class="dark-mode docs-theme polykit-site">

        <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5ZXG85V7" height="0" width="0"
                style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->

        <?php include 'includes/_hellobar.php'; ?>
        <?php include 'includes/_nav.php'; ?>

        <div class="main-wrapper">
            <aside>
                <a href="/" class="logo">
                    <img src="imgs/polykit-logo.svg" alt="Polykit" height="40px" width="auto">
                </a>
                <h2 class="caption uppercase">Docs</h2>
                <ul class="table-of-contents">
                    <li><a class="caption" href="#getting-started">Getting Started</a></li>
                    <li><a class="caption" href="#section_subatomics">Subatomics</a></li>
                    <ul>
                        <li><a class="caption" href="#section_branding">Branding</a></li>
                        <li><a class="caption" href="#section_grid">Grid</a></li>
                        <li><a class="caption" href="#section_typography">Typography</a></li>
                        <li><a class="caption" href="#section_colors">Colors</a></li>
                        <li><a class="caption" href="#section_modes">Modes</a></li>
                    </ul>
                    <li><a class="caption" href="#section_atoms">Atoms</a></li>
                    <ul>
                        <li><a class="caption" href="#section_containers">Containers</a></li>
                        <li><a class="caption" href="#section_text">Text</a></li>
                        <li><a class="caption" href="#section_icons">Icons</a></li>
                        <li><a class="caption" href="#section_lists">Lists</a></li>
                        <li><a class="caption" href="#section_buttons">Buttons</a></li>
                        <li><a class="caption" href="#section_separators">Separators</a></li>
                        <li><a class="caption" href="#section_codeblocks">Codeblocks</a></li>
                    </ul>
                    <li><a class="caption" href="#section_molecules">Molecules</a></li>
                    <ul>
                        <li><a class="caption" href="#section_nav">Nav</a></li>
                    </ul>
                    <li><a class="caption" href="#section_organisms">Organisms</a></li>
                    <ul>
                        <li><a class="caption" href="#section_header">Header</a></li>
                    </ul>
                </ul>
            </aside>

            <main>

                <h1 class="title-1">Docs</h1>

                <hr>

                <h2 class="heading-1" id="getting-started">Getting Started</h2>

                <?php include 'includes/content/docs/_install-css.php'; ?>
                <hr>

                <?php include 'includes/content/docs/_customizing-scss.php'; ?>
                <hr>

                <h2 class="heading-1" id="section_subatomics">Subatomics</h2>

                <?php include 'includes/content/docs/_branding.php'; ?>

                <?php include 'includes/content/docs/_grid.php'; ?>
                <hr>

                <?php include 'includes/content/docs/_typography.php'; ?>
                <hr>

                <?php include 'includes/content/docs/_colors.php'; ?>
                <hr>

                <!-- hidden
                <?php include 'includes/content/docs/_modes.php'; ?>
                -->

                <h2 class="heading-1" id="section_atoms">Atoms</h2>

                <!-- hidden
                <?php include 'includes/content/docs/_containers.php'; ?>
                -->

                <!-- hidden
                <?php include 'includes/content/docs/_text.php'; ?>
                -->

                <!-- hidden
                <?php include 'includes/content/docs/_icons.php'; ?>
                -->

                <!-- hidden
                <?php include 'includes/content/docs/_lists.php'; ?>
                -->

                <?php include 'includes/content/docs/_buttons.php'; ?>

                <hr>

                <!-- hidden
                <?php include 'includes/content/docs/_separators.php'; ?>
                -->

                <!-- hidden
                <?php include 'includes/content/docs/_codeblocks.php'; ?>
                -->

                <!-- hidden
                <h2 class="heading-1" id="section_molecules">Molecules</h2>
                -->

                <!-- hidden
                <?php include 'includes/content/docs/_nav.php'; ?>
                -->

                <!-- hidden
                <h2 class="heading-1" id="section_organisms">Organisms</h2>
                -->

                <!-- hidden
                <?php include 'includes/content/docs/_header.php'; ?>
                -->

            </main>

        </div>

    </body>
<!-- Scripts -->
<script defer src="app/js/polykit-v0-3.js"></script>
</html>