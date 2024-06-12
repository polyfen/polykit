<!DOCTYPE html>
<html lang="en">

    <head>
        <title>Polykit | Getting Started</title>

        <?php include 'includes/_head.php'; ?>

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

        <!-- Style Sheets CSS -->
        <link rel="stylesheet" href="app/css/polykit-v0-1.css" type="text/css">
        <link rel="stylesheet" href="app/css/custom-styles-pk.css" type="text/css">

        <!-- Google Tag Manager -->
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-5ZXG85V7');</script>
        <!-- End Google Tag Manager -->
        
        <!-- PAGE-SPECIFIC META start -->
        <!-- PAGE-SPECIFIC META end -->

        

    </head>

    <body class="dark-mode site getting-started">

        <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5ZXG85V7"
        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->

        <?php include 'includes/_hellobar.php'; ?>

        <?php include 'includes/_header.php'; ?>

        <main class="container">

        <h1 class="heading-1 uppercase" style="border-left:4px solid hsla(208, 90%, 50%, 1);padding-left:1rem;display:inline-block;letter-spacing:1px;">Getting Started</h1>

        <h2 class="heading-1">For Developers</h2>

        <?php include 'includes/content/getting-started/_install-css.php'; ?>
        <hr>

        <?php include 'includes/content/getting-started/_customizing-scss.php'; ?>
        <hr>
            
        </main>

        <?php include 'includes/_footer.php'; ?>
        
    </body>
</html>