<script language="javascript" type="text/javascript">
    function copiarLink(){
        navigator.clipboard.writeText(document.getElementById("cssLink").textContent);
    }
</script>
<section>
    <h3 class="heading-2">Installing Polykit via CSS</h2>
    <p>Add the following line of code in your <code>&lt;head&gt;</code>.</p>
    <pre><code id="cssLink">&lt;link <span class="hljs-keyword">rel</span>=<span class="hljs-string">"stylesheet"</span> href=<span class="hljs-string">"https://polykit.xyz/app/css/polykit-v0-1.css"</span> <span class="hljs-keyword">type</span>=<span class="hljs-string">"text/css"</span>&gt;</code></pre>
<button onClick="javascript:copiarLink();">Copiar Link</button>
</section>