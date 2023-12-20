# An Open-Source Design System

```
  ____       _       _    _ _   
 |  _ \ ___ | |_   _| | _(_) |_ 
 | |_) / _ \| | | | | |/ / | __|
 |  __/ (_) | | |_| |   <| | |_ 
 |_|   \___/|_|\__, |_|\_\_|\__|
               |___/            
```

version: 01

url: [polykit.xyz](https://polykit.xyz)

A collection of reusable components, guidelines, and assets that are openly accessible and can be used to create consistent and cohesive designs across different platforms and devices.

Made with a focus on beautiful typography and seamless integration between ux design and code.

The code is:
* Light-weight
* Mobile-first
* W3C compliant
* Following accessability best practices
* Following SEO best practices
* Easy to read
* Easy to pick-up
* Easy to maintain and scale

The design is:
* Clean
* Consistent
* Easy to customize and scale
* Following typography best practices

Learn more at [polykit.xyz](https://polykit.xyz)

---

## Install Polykit

Add the following line of code in your `<head>`.

```
<link rel="stylesheet" href="https://polykit.xyz/app/css/polykit-v01.css" type="text/css">
```

---

## UI Grid

All the dimensions of visual components —as well as the space between them— are defined around the `$grid-unit-size`.

The base value of `$grid-unit-size` is `8px`.

The preferred measurement unit for font-sizes, margins, and paddings is **REM**.

The base value of `$rem-font-size` —defined as `$grid-unit-size * 2`— is `16px`.


---

## Atomic Design

Our design system follows the rationale proposed by Brad Frost in a blog post called ["Atomic Web Design"](https://bradfrost.com/blog/post/atomic-web-design/).


---

## Folders &amp; Files Structure

```

› /.github
› /app
    |<span class="hljs-type">_______</span> › /css
                |<span class="hljs-type">_______</span> › polykit-v01.css
    |<span class="hljs-type">_______</span> › /scss
                |<span class="hljs-type">_______</span> › /<span class="hljs-built_in">01-subatomics</span>
                            |<span class="hljs-type">_______</span> › _colors.scss
                            |<span class="hljs-type">_______</span> › _general.scss
                            |<span class="hljs-type">_______</span> › _grid.scss
                            |<span class="hljs-type">_______</span> › _modes.scss
                            |<span class="hljs-type">_______</span> › _reset.scss
                            |<span class="hljs-type">_______</span> › _type.scss
                |<span class="hljs-type">_______</span> › /02-atoms
                            |<span class="hljs-type">_______</span> › _buttons.scss
                            |<span class="hljs-type">_______</span> › _code.scss
                            |<span class="hljs-type">_______</span> › _containers.scss
                            |<span class="hljs-type">_______</span> › _links.scss
                            |<span class="hljs-type">_______</span> › _separators.scss
                            |<span class="hljs-type">_______</span> › _typography.scss
                |<span class="hljs-type">_______</span> › /03-molecules
                |<span class="hljs-type">_______</span> › /04-organisms
                |<span class="hljs-type">_______</span> › /05-templates
                |<span class="hljs-type">_______</span> › /06-pages
                            |<span class="hljs-type">_______</span> › _site.scss
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


```

---

## Development Dependencies


### Sass

TBD

### Gulp

TBD

---