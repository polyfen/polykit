<?php
    include 'includes.php';
?>
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
        <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#ffaa00">
        <meta name="msapplication-TileColor" content="#ffaa00">
        <meta name="theme-color" content="#ffaa00">

        <!-- FONTS -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Figtree:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="app/css/polykit-v01.css" type="text/css">

        <!-- Google Tag Manager -->
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-5ZXG85V7');</script>
        <!-- End Google Tag Manager -->
        
        <!-- PAGE-SPECIFIC META start -->
        <meta property="og:title" content="Poly Nucleus | Design System"/>
        <meta property="og:url" content="https://polynucleus.com"/>
        <meta name="keywords" content="Design, system, design system, free, open source, polyfen" />
        <meta name="description" property="og:description" content="Open-source design system... in early development. Very — early — development." />
        <meta property="og:image" content=""/>
        <meta property="og:image:width" content="1200" />
        <meta property="og:image:height" content="630" />
        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:site" content="Poly Nucleus" />
        <meta name="twitter:creator" content="@PolyfenGroup">
        <meta name="twitter:title" content="Poly Nucleus | Design System" />
        <meta name="twitter:description" content="Open-source design system... in early development. Very — early — development." />
        <meta name="twitter:image" content="" />
        <meta name="robots" content="index, follow">
        <!-- PAGE-SPECIFIC META end -->

        

    </head>
    <body class="light-mode">
        <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5ZXG85V7"
        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->
        <header>
            <img src="imgs/polykit-logo.svg" height="50px" width="auto">
        </header>
        <main class="container">
            <section class="align-center">
                <h1 class="title-1 align-center">An Open-source Design System</h1>

                <p class="align-center">Made with a focus on beautiful typography and seamless integration between ux design and code.</p>
                
                <a class="button" href="https://github.com/thepolygroup/polynucleus">Github Repo</a>
                <a class="button" href="">Figma Library</a>
            </section>
            <hr>
            <section>
                <p>A collection of reusable components, guidelines, and assets that are openly accessible and can be used to create consistent and cohesive designs across different platforms and devices.</p>
                <p>The code is:</p>
                <ul>
                    <li>Light-weight</li>
                    <li>Mobile-first</li>
                    <li>W3C compliant</li>
                    <li>Following accessability best practices</li>
                    <li>Following SEO best practices</li>
                    <li>Easy to read</li>
                    <li>Easy to pick-up</li>
                    <li>Easy to maintain and scale</li>
                </ul>
                <p>The design is:</p>
                <ul>
                    <li>Clean</li>
                    <li>Consistent</li>
                    <li>Easy to customize and scale</li>
                    <li>Following typography best practices</li>
                </ul>
                <p>Learn more at <a href="https://polykit.xyz">polykit.xyz</a></p>
                <hr>
                <h2 id="install-polykit">Install Polykit</h2>
                <p>Add the following line of code in your <code>&lt;head&gt;</code>.</p>
                <pre><code>
&lt;link <span class="hljs-keyword">rel</span>=<span class="hljs-string">"stylesheet"</span> href=<span class="hljs-string">"https://polykit.xyz/app/css/polykit-v01.css"</span> <span class="hljs-keyword">type</span>=<span class="hljs-string">"text/css"</span>&gt;

</code></pre>
                <hr>
                <h2 id="ui-grid">UI Grid</h2>
                <p>All the dimensions of visual components —as well as the space between them— are defined around the <code>$grid-unit-size</code>.</p>
                <p>The base value of <code>$grid-unit-size</code> is <code>8px</code>.</p>
                <p>The preferred measurement unit for font-sizes, margins, and paddings is <strong>REM</strong>.</p>
                <p>The base value of <code>$rem-font-size</code> —defined as <code>$grid-unit-size * 2</code>— is <code>16px</code>.</p>
                <hr>
                <h2 id="atomic-design">Atomic Design</h2>
                <p>Our design system follows the rationale proposed by Brad Frost in a blog post called <a href="https://bradfrost.com/blog/post/atomic-web-design/">&quot;Atomic Web Design&quot;</a>.</p>
                <hr>
                <h2 id="folders-amp-files-structure">Folders &amp; Files Structure</h2>
                <pre><code>
› /.github
› /app
    |<span class="hljs-type">_______</span> › /css
                |<span class="hljs-type">_______</span> › polykit-v01.css
    |<span class="hljs-type">_______</span> › /scss
                |<span class="hljs-type">_______</span> › /<span class="hljs-built_in">abstract</span>
                            |<span class="hljs-type">_______</span> › _breakpoints.scss
                            |<span class="hljs-type">_______</span> › _colors.scss
                            |<span class="hljs-type">_______</span> › _mixins.scss
                            |<span class="hljs-type">_______</span> › _type.scss
                |<span class="hljs-type">_______</span> › /base
                            |<span class="hljs-type">_______</span> › _base.scss
                            |<span class="hljs-type">_______</span> › _containers.scss
                            |<span class="hljs-type">_______</span> › _modes.scss
                            |<span class="hljs-type">_______</span> › _reset.scss
                            |<span class="hljs-type">_______</span> › _separators.scss
                            |<span class="hljs-type">_______</span> › _typography.scss
                |<span class="hljs-type">_______</span> › /components
                            |<span class="hljs-type">_______</span> › _buttons.scss
                |<span class="hljs-type">_______</span> › polykit-v01.scss
› /demo
    |<span class="hljs-type">_______</span> › /polyfen
    |<span class="hljs-type">_______</span> › /mfw
› /imgs
› /node_modules
› /theme
› gulpfile.js
› index.php
› readme.md
                </code></pre><hr>
                <h2 id="development-dependencies">Development Dependencies</h2>
                <h3 id="sass">Sass</h3>
                <p>TBD</p>
                <h3 id="gulp">Gulp</h3>
                <p>TBD</p>
            </section>
            <hr>
        </main>
        <footer>
            <a href="https://thepolyfengroup.com" target="_blank">
                <img src="imgs/the-polyfen-group-logo.svg" width="80px" height="auto" style="margin: 2rem auto;">
            </a>
        </footer>
    </body>
</html>