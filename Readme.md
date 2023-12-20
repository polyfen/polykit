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

/.github
/app
    |_______ › /css
                |_______ › polykit-v01.css
    |_______ › /scss
                |_______ › /01-subatomics
                            |_______ › _colors.scss
                            |_______ › _general.scss
                            |_______ › _grid.scss
                            |_______ › _modes.scss
                            |_______ › _reset.scss
                            |_______ › _type.scss
                |_______ › /02-atoms
                            |_______ › _buttons.scss
                            |_______ › _code.scss
                            |_______ › _containers.scss
                            |_______ › _links.scss
                            |_______ › _separators.scss
                            |_______ › _typography.scss
                |_______ › /03-molecules
                |_______ › /04-organisms
                |_______ › /05-templates
                |_______ › /06-pages
                            |_______ › _site.scss
                |_______ › polykit-v01.scss
/demo
    |_______ › /polyfen
    |_______ › /mfw
/imgs
/node_modules
/theme
gulpfile.js
index.php
readme.md



```

---

## Development Dependencies


### Sass

TBD

### Gulp

TBD

---