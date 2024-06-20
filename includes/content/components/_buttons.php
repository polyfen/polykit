<section>
    <h3 id="buttons" class="heading-2">Buttons</h3>
    <h4 class="heading-3">Hierarchy</h4>
    <div class="components-demo">
        <div>
            <small>regular-button</small>
            <small>secondary-button</small>
            <small>cta-button</small>
        </div>
        <div>
            <button class="">Download Now</button>
            <button class="secondary-button">Download Now</button>
            <button class="cta-button animated-button">Download Now</button>
        </div>
    </div>
    <section class="tab-container">
        <div class="tabs">
            <button class="tab-button small-button" data-tab="html">HTML</button>
            <button class="tab-button small-button" data-tab="css">CSS</button>
        </div>
        <pre class="tab-panel html-content active"><code>&lt;button class="button"&gt;&lt;/button&gt;
&lt;button class="button secondary-button"&gt;&lt;/button&gt;
&lt;button class="buton cta-button&gt;&lt;/button&gt;</code></pre>
        <pre class="tab-panel css-content"><code>.button {
    background: $accent-color;
    color: $white;
    padding: 0.75rem 1.5rem;
    border-radius: 10rem;
    text-decoration: none;
    letter-spacing: 0.5px;
    font-weight: 600;
    box-shadow: 0 0 2px $accent-color;
    display: flex;
    width: 240px;
    max-width: 100%;
    justify-content: center;
    align-items: center;
    margin: 1rem auto;
    cursor: pointer;
}
.secondary-button {
    background-color: $indigo900;
    box-shadow: 0 0 4px hsl(208, 100%, 53%),
    inset 0 0 0 4px hsla(234, 61%, 6%, 0.6);
}

.cta-button {
    background-image: linear-gradient(45deg,
        hsl(228, 100%, 53%),
        hsl(188, 100%, 53%));
    background-size: 200% 200%;
    animation: gradient 7s infinite;
}
</code></pre>
    </section>

    <h4 class="heading-3">Size</h4>
    <div class="components-demo">
        <div>
            <small>small-button</small>
            <small>regular-button</small>
            <small>large-button</small>
        </div>
        <div>
            <button class="small-button">Download Now</button>
            <button class="">Download Now</button>
            <button class="large-button">Download Now</button>
        </div>
    </div>
    <section class="tab-container">
        <div class="tabs">
            <button class="tab-button small-button" data-tab="html">HTML</button>
            <button class="tab-button small-button" data-tab="css">CSS</button>
        </div>
        <pre class="tab-panel html-content active"><code>&lt;button class="button small-button"&gt;&lt;/button&gt;
&lt;button class="button"&gt;&lt;/button&gt;
&lt;button class="button large-button"&gt;&lt;/button&gt;</code></pre>
        <pre class="tab-panel css-content"><code>.small-button {
    height: 35px;
    font-size: 0.75rem;
    text-transform: uppercase;
    letter-spacing: 1px;
    padding: 0.5rem 1rem;
    width: 180px;
}

(regularbutton)

large-button {
    padding: 1.25rem 1rem;
    text-transform: uppercase;
    letter-spacing: 1px;
    width: 260px;
}


</code></pre>
    </section>

    <h4 class="heading-3">Icons</h4>
    <div class="components-demo">
        <div>
            <small>left-icon</small>
            <small>right-icon</small>
            <small>right-left-icon</small>
        </div>
        <div>
            <button class="" data-button-icon="phone">Download Now</button>
            <button class="" data-button-arrow>Download Now</button>
            <button class="" data-button-arrow-up>Download Now</button>
        </div>
    </div>
    <section class="tab-container">
        <div class="tabs">
            <button class="tab-button small-button" data-tab="html">HTML</button>
            <button class="tab-button small-button" data-tab="css">CSS</button>
        </div>
        <pre class="tab-panel html-content active"><code>&lt;button data-button-icon="phone"&gt;&lt;/button&gt;
&lt;button data-button-arrow&gt;&lt;/button&gt;
&lt;button data-button-arrow-up&gt;&lt;/button&gt;</code></pre>
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