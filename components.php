<!DOCTYPE html>
<html lang="en">

    <head>
        <title>Polykit | UI Components</title>

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
        <!-- PAGE-SPECIFIC META end -->

        

    </head>

    <body class="dark-mode site components">

        <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5ZXG85V7"
        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->

        <?php include 'includes/_header.php'; ?>

        <aside>
            <ul>
                <li><a href="#">Subatomics</a></li>
                <ul>
                    <li><a href="#">Branding</a></li>
                    <li><a href="#">Grid</a></li>
                    <li><a href="#">Typography</a></li>
                    <li><a href="#">Colors</a></li>
                    <li><a href="#">Modes</a></li>
                </ul>
                <li><a href="#">Atoms</a></li>
                <ul>
                    <li><a href="#">Containers</a></li>
                    <li><a href="#">Text</a></li>
                    <li><a href="#">Icons</a></li>
                    <li><a href="#">Lists</a></li>
                    <li><a href="#">Buttons</a></li>
                    <li><a href="#">Separators</a></li>
                    <li><a href="#">Codeblocks</a></li>
                </ul>
                <li><a href="#">Molecules</a></li>
                <ul>
                    <li><a href="#">Nav</a></li>
                </ul>
                <li><a href="#">Organisms</a></li>
                <ul>
                    <li><a href="#">Header</a></li>
                </ul>
            </ul>
        </aside>

        <main class="container">

        <h1 class="caption">UI Components</h1>

        <h2 class="title-1">Subatomics</h2>

        <?php include 'includes/content/components/_grid.php'; ?>
        <hr>
            
        <?php include 'includes/content/components/_typography.php'; ?>
        <hr>

        <h2 class="title-1">Atoms</h2>

        <?php include 'includes/content/components/_buttons.php'; ?>
        <hr>
            
        </main>

        <?php include 'includes/_footer.php'; ?>
        
    </body>
</html>