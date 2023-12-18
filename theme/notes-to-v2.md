# Changes to HTML files for transitioning from v1 to v2:

## Buttons in <nav>:
Previously, there was a single button; now there are two. These buttons appear after the closing </nav> tag.

+ The new buttons are defined as follows:

<button aria-label="Open/Close navbar" class="hamburger">
    <img src="imgs/icons/hamburger_icon.svg" alt="" height="30px" width="auto">
</button>
<button class="close">
    <svg xmlns="http://www.w3.org/2000/svg" width="72" height="72" viewBox="0 0 24 24"><path fill="none" stroke="black" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m16 16l-4-4m0 0L8 8m4 4l4-4m-4 4l-4 4"/></svg>
</button>

## First <img> in Section.Cover:
Added the class "plfn-logo" to the first <img> element in the section.cover, which serves as the header image on the site. Additionally, it's worth noting that the class "main-logo" can also be used on sites outside of Polyfen.

+ The updated code looks like this:

<img class="plfn-logo" src="imgs/polyfen-logo.svg" alt="Polyfen Logo" height="80px" width="auto">

### These modifications ensure compatibility and reflect the changes required for the transition from version 1 to version 2.

---

Last Updated: Dicember 15, 2023