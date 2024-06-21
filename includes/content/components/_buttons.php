<section>
    <h3 id="section_buttons" class="heading-2">Buttons</h3>
    <h4 class="heading-3">Hierarchy</h4>
    <div class="components-demo">
        <div>
            <small>regular-button</small>
            <button class="">Download Now</button>
        </div>
        <div>
            <small>secondary-button</small>
            <button class="secondary-button">Download Now</button>
        </div>
        <div>
            <small>cta-button</small>
            <button class="cta-button">Download Now</button>
        </div>
    </div>
    <section class="tab-container">
        <div class="tabs">
            <button class="tab-button small-button active" data-tab="html">HTML</button>
            <button class="tab-button small-button" data-tab="css">CSS</button>
        </div>
        <pre class="tab-panel html-content active"><code>&lt;button&gt;Download Now&lt;/button&gt;
&lt;button class="secondary-button"&gt;Download Now&lt;/button&gt;
&lt;button class="cta-button&gt;Download Now&lt;/button&gt;</code></pre>
        <pre class="tab-panel css-content"><code>button, .button {
    display: flex;
    justify-content: center;
    align-items: center;
    width: 240px;
    max-width: 100%;
    margin: 1rem auto;
    padding: 1rem 1.4rem;
    border: none;
    border-radius: 900px;
    background-color: $accent-color;
    color: hsl(0, 0%, 100%);
    letter-spacing: 0.5px;
    text-decoration: none;
    cursor: pointer;
    transition: 0s;
}
.secondary-button {
    border: 3px solid $accent-color;
    background-color: $accent-color-900;
    background-image: none !important;
}

.cta-button {
    box-shadow: 0 0 4px $accent-color,
                inset 0 0 0 4px hsla(234, 61%, 6%, 0.6);
    animation: gradient 7s infinite;
    background-image: linear-gradient(
                      45deg,
                      $accent-color-gradient-start,
                      $accent-color-gradient-end);
    background-size: 200% 200%;
}
</code></pre>
    </section>
    <h4 class="heading-3">Size</h4>
    <div class="components-demo">
        <div>
            <small>small-button</small>
            <button class="small-button">Download Now</button>
        </div>
        <div>
            <small>regular-button</small>
            <button class="">Download Now</button>
        </div>
        <div>
            <small>large-button</small>
            <button class="large-button">Download Now</button>
        </div>
    </div>
    <section class="tab-container">
        <div class="tabs">
            <button class="tab-button small-button active" data-tab="html">HTML</button>
            <button class="tab-button small-button" data-tab="css">CSS</button>
        </div>
        <pre class="tab-panel html-content active"><code>&lt;button class="button small-button"&gt;Download Now&lt;/button&gt;
&lt;button class="button"&gt;Download Now&lt;/button&gt;
&lt;button class="button large-button"&gt;Download Now&lt;/button&gt;</code></pre>
        <pre class="tab-panel css-content"><code>.small-button {
    height: 35px;
    width: 180px;
    padding: 0.5rem 1rem;
    font-size: 0.75rem;
    letter-spacing: 1px;
    text-transform: uppercase;
}

/* Is the default size for all buttons  */

large-button {
    width: 260px;
    padding: 1.25rem 1rem;
    letter-spacing: 1px;
    text-transform: uppercase;
}
</code></pre>
    </section>

    <h4 class="heading-3">Icons</h4>
    <div class="components-demo">
        <div>
            <small>left-icon</small>
            <button class="" data-button-icon="phone">Download Now</button>
        </div>
        <div>
            <small>right-icon</small>
            <button class="" data-button-arrow>Download Now</button>
        </div>
        <div>
            <small>right-left-icon</small>
            <button class="" data-button-arrow-up>Download Now</button>
        </div>
    </div>
    <section class="tab-container">
        <div class="tabs">
            <button class="tab-button small-button active" data-tab="html">HTML</button>
            <button class="tab-button small-button" data-tab="css">CSS</button>
        </div>

        <pre class="tab-panel html-content active"><code>&lt;button data-button-icon="phone"&gt;Download Now&lt;/button&gt;
&lt;button data-button-arrow&gt;Download Now&lt;/button&gt;
&lt;button data-button-arrow-up&gt;Download Now&lt;/button&gt;</code></pre>
        <pre class="tab-panel css-content"><code>[data-button-icon]::before {
    content: '';
    display: inline-block;
    width: 30px;
    height: 30px;
    margin-right: 8px;
    vertical-align: middle;
    background-repeat: no-repeat;
    background-position: center center;
}

[data-button-icon="phone"]::before {
    background-image: url(../../imgs/icons/phone-call.svg);
    filter:none;
    margin-block: -8px;
}

[data-button-arrow]::after {
    content: '';
    background-image: url(/imgs/icons/arrow-right-fill.svg);
    background-repeat: no-repeat;
    display: inline-block;
    opacity: .8;
    height: 10px;
    width: 18px;
    margin-left: 6px;
}

@keyframes moveArrow {
    0% {
        transform: translateX(0);
    }
    70% {
        transform: translateX(10px);
    }
    100% {
        transform: translateX(10px);
    }
}

[data-button-arrow-up]::before,
[data-button-arrow-up]::after {
    content: url(/imgs/icons/arrow-up-fill.svg);
    display: inline-block;
    opacity: .8;
    animation: moveArrow-up 1s ease-out infinite;
    height: 16px;
    width: 9px;
}

[data-button-arrow-up]::before {
    margin-right: 10px;
}

[data-button-arrow-up]::after {
    margin-left: 10px;
}

@keyframes moveArrow-up {
    0% {
        transform: translatey(0px);
    }
    70% {
        transform: translatey(-5px);
    }
    100% {
        transform: translatey(-5px);
    }
}

</code></pre>
    </section>
</section>