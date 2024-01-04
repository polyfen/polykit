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
        <script src="https://unpkg.com/@phosphor-icons/web"></script>
        <link
            rel="stylesheet"
            type="text/css"
            href="https://unpkg.com/@phosphor-icons/web@2.0.3/src/fill/style.css"
        />

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

    <body class="dark-mode site home">

        <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5ZXG85V7"
        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->

        <?php include 'includes/_header.php'; ?>

        <main>

            <?php include 'includes/content/home/_cover.php'; ?>
            
            <div style="background: #070a1e;padding:4rem 0;margin:4rem 0;">
                <div class="container">
                <?php include 'includes/content/home/_intro.php'; ?>
                <hr>

                <?php include 'includes/content/home/_atomic-design.php'; ?>
                <hr>

                <?php include 'includes/content/home/_wordpress-themes.php'; ?>
                </div>
            </div>

            <?php include 'includes/_email-subscription.php'; ?>

        </main>

        <?php include 'includes/_footer.php'; ?>
        
    </body>
</html>