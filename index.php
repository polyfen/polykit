<!DOCTYPE html>
<html lang="en">

    <head>
        <title>Polykit | Open-Source Design System</title>

        <!-- META General -->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta property="og:type" content="website"/>
        <meta name="author"  content="The Polyfen Group LLC"/>

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
        <link href="https://fonts.googleapis.com/css2?family=Figtree:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="app/css/polykit-v0-1.css" type="text/css">

        <!-- Google Tag Manager -->
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-5ZXG85V7');</script>
        <!-- End Google Tag Manager -->
        
        <!-- PAGE-SPECIFIC META start -->
        <meta property="og:title" content="Polykit | Design System"/>
        <meta property="og:url" content="https://polykit.xyz/"/>
        <meta name="keywords" content="Design, system, design system, free, open source, polyfen" />
        <meta name="description" property="og:description" content="Open-source design system for User Interfaces with CSS code for developers and Figma library for designers." />
        <meta property="og:image" content=""/>
        <meta property="og:image:width" content="1200" />
        <meta property="og:image:height" content="630" />
        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:site" content="Polykit" />
        <meta name="twitter:creator" content="@PolyfenGroup">
        <meta name="twitter:title" content="Polykit | Design System" />
        <meta name="twitter:description" content="Open-source design system for User Interfaces with CSS code for developers and Figma library for designers." />
        <meta name="twitter:image" content="" />
        <meta name="robots" content="index, follow">
        <!-- PAGE-SPECIFIC META end -->

        

    </head>

    <body class="dark-mode site">

        <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5ZXG85V7"
        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->

        <header>
            <img src="imgs/polykit-logo.svg" height="50px" width="auto">
            <small>v 0.1</small>
        </header>

        <main class="container">

            <?php include 'includes/_cover.php'; ?>
            <hr>
            
            <?php include 'includes/_intro.php'; ?>
            <hr>

            <?php include 'includes/_install-css.php'; ?>
            <hr>

            <?php include 'includes/_ui-grid.php'; ?>
            <hr>

            <?php include 'includes/_atomic-design.php'; ?>
            <hr>

            <?php include 'includes/_folders-and-files.php'; ?>
            <hr>

            <?php include 'includes/_typography.php'; ?>
            <hr>

        </main>

        <footer>
            <a href="https://thepolyfengroup.com" target="_blank">
                <img src="imgs/the-polyfen-group-logo.svg" width="80px" height="auto" style="margin: 2rem auto;">
            </a>
        </footer>
        
    </body>
</html>