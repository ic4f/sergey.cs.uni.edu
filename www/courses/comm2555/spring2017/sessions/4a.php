
<h4>Plan for today:</h4>
<ol>
    <li><a href="#1">Structure of an HTML document</a>
    <li><a href="#2">Debugging and validating your code</a>
</ol>

<h4 id="1">1. Structure of an HTML document</h4>
<p>An HTML document consists of 2 main parts: the head and the body:
<ul>
    <li>the <b>HEAD</b> contains information about the web page (not displayed by the browser)
    <li>the <b>BODY</b> contains the web page content (this is what your browser displays)
</ul>

<p><img src="4_resources/structure.png" alt="html element">


<p>Here are a few more detailed resources:
<ul>
    <li><a href="https://developer.mozilla.org/en-US/docs/Learn/HTML/Introduction_to_HTML/Getting_started#Anatomy_of_an_HTML_document">Anatomy of an HTML document</a>
    <li><a href="https://developer.mozilla.org/en-US/docs/Learn/HTML/Introduction_to_HTML/The_head_metadata_in_HTML">What's in the head?</a>
</ul>

<p>In HTML5, the &lt;html&gt;, &lt;head&gt; and &lt;body&gt; tags are optional. If you don't include them, the html, head and body HTML elements still exist - they are implied, so you can style them with CSS or manipulate them with JavaScript.

<p>Thus, the source code of the smallest valid HTML document would look like this: 

<pre class="code">
        <?php echo(htmlspecialchars("<!DOCTYPE html><title> </title>")); ?>
</pre>

<p>(Note the space: the title cannot be empty)

<p>However, my <strong>strong</strong> recommendation is to include three tags of these elements. Code is written to be read by humans; that includes others who will read your code, and you - for you will be reading (and editing) it over and over again while developing your web site. Separating the head (with information about your content) from the actual content makes coding much easier! In other words, keep the meta data separate from the data!

<h4 id="2">2. Debugging and validating your code</h4>

<p>Here's <a href="https://developer.mozilla.org/en-US/docs/Learn/HTML/Introduction_to_HTML/Debugging_HTML">a good set of guidelines on how to debug your HTML</a>.

<p>When using the <a href="https://validator.w3.org/">W3C HTML validator</a> do not be scared by many errors: usually fixing the first one takes care of most of the rest (a missed quotation mark can cause a lot of errors to "trickle down" the source code: adding the missed quote could fix them all!)

<p>Overall, pay attention to detail: you are writing "for a computer" - and computers only follow instructions. Miss a character, and the precise instruction will fall apart. So when you see a mess, look at your code and try to imagine how a computer would read that code - i.e., character by character. Where, do you think, it could have seen a character that confused it?

<p>Also, pay attention to syntax highlighting in your editor: you will immediately see when something is off.

<p>Try to spot the errors in these examples (the first one has no errors, the rest have ONE character missed or mistyped):

<ul>
    <li><a href="4_resources/noerror.html">no error</a>
    <li><a href="4_resources/error1.html">error 1</a>
    <li><a href="4_resources/error2.html">error 2</a>
    <li><a href="4_resources/error3.html">error 3</a>
    <li><a href="4_resources/error4.html">error 4</a>
</ul>

