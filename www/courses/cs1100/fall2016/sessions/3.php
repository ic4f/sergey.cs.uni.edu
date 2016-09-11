
<h4>Plan for today:</h4>
<ol>
    <li><a href="#1">What is a markup language</a>
    <li><a href="#2">HTML: versions, browser wars, standards movement</a>
    <li><a href="#3">HTML syntax</a>
    <li><a href="#4">Structure of an HTML document</a>
    <li><a href="#5">Debugging and validating your code</a>
</ol>

<h4 id="1">1. What is a markup language</h4>
<p>HTML stands for <b>H</b>yper<b>t</b>ext <b>M</b>arkup <b>L</b>anguage. Markup is used to annotate text. A markup <em>language</em> is used to annotate text in a systematic way. In the world of print, markup could be editing instructions added to a manuscript by an editor. In school, markup could be the corrections a teacher makes to a student's paper. In a web page, markup is instructions on how to display the content (or, more precisely, a description of that content's structure). 

<p>In other words, markup is information about the content.

<p>As you remember, a web page is nothing but plain text. That text consists of (a) text to be displayed, and (b) instructions on how to display it. The browser should be able to tell the difference between the two. And since the browser is a computer program, it will only understand precise instructions. That's exactly what HTML does: it uses a precise syntactic construct, called tags, to separate text from markup - i.e., text to be displayed from text to be interpreted as instructions. 

<p>Here's an example:

<pre class="code">
<?php echo(htmlspecialchars('<p>This is a paragraph')); ?>
</pre>

<p>The text "This is a paragraph" is just text - so it will be displayed. 
<p>The text "&lt;p&gt;" is a tag - so it won't be displayed. Instead, it will be interpreted by the browser as a "paragraph" tag, so the browser will display everything that follows this tag on a new line. 

<p>Thus, HTML is a formal language used for describing the structure of a web page, that is understood by the browser.

<h4 id="2">2. HTML: versions, browser wars, standards movement</h4>
<ul>
    <li>1991: first web page goes online
    <li>1997: The W3C releases the specification of HTML 4.0 as a W3C Recommendation 
    <li>"Browser wars" and the Web Standards movement:
        <ul>
            <li>refers to the struggle among browser manufacturer's for market dominance. The most iconic was, probably, the struggle between Internet Explorer and Netscape Navigator in the late 90s and throughout the early 2000s. 
            <li>occasional positive outcome: introduction of useful features (JavaScript, first CSS implementation)
            <li>negative consequences: 
                <ul>
                    <li>fragmentation of the Web, incompatible browsers offering features that "work best in" or, often, only in a specific browser
                    <li>cost of web development skyrockets (multiple versions of the same web page written to accommodate multiple browsers)
                    <li>impossible to predict how different browsers will handle invalid or incompatible markup
                    <li>...and many, many more!
                </ul>
            <li>Web Standards Project: represents the Web standards movement, an attempt to bring the web development community to follow standards developed by the W3C ( <a href="http://www.webstandards.org/about/history/">read this for a quick overview</a> )
        </ul>
    <li>HTML goes through several versions (XHTML 1.0 Strict; XHTML 1.0 Transitional)
    <li>HTML5 / current version: started by a small subcommittee of the W3C, adopted by the W3C as the HTML new standard version in 2009 (development of XHTML 2.0 abandoned)
    <li>HTML5 is:
        <ul>
            <li>a new version of HTML, with new elements, attributes, and behaviors
            <li>a larger set of technologies that enables the development of rich media/interaction websites and web  applications
        </ul>
</ul>

<h4 id="3">3. HTML syntax </h4>
<p>Besides the material offered by your textbook, there are lots of HTML tutorials and other resources available online. 
<ul>
    <li><a href="https://developer.mozilla.org/en-US/docs/Web/Guide/HTML/Introduction">Here's a very brief overview of HTML</a>  
    <li><a href="https://developer.mozilla.org/en-US/docs/Learn/HTML/Introduction_to_HTML">Here's a great place to start</a> (look at the guides!)
    <li>And if this looks overwhelming, <a href="https://developer.mozilla.org/en-US/docs/Learn/Getting_started_with_the_web">start simple</a>
</ul>

<p>Following are a few key points from our class discussion.

<ul>
    <li>An HTML document consists of text content and <b>HTML elements</b> containing information about that content.
    <li>An HTML element:
        <ul>
            <li>is denoted by one or two (opening and closing) <b>tags</b> 
            <li>may contain textual content or other HTML elements. 
        </ul>
    <li>A tag contains the name of the element and, optionally, one or more <b>attributes</b>.
    <li>An attribute provides additional information about the HTML element, and has the form of a name/value pair
</ul>
<p>Here's an example of an HTML element:

<p><img src="3_resources/html_element.png" alt="html element">

<p>Having learned the syntax of HTML you will be able to read any HTML document you encounter. More importantly, it will be much easier for you to write HTML (regardless of the tags or attributes you use), and it will be much easier for you to debug your code. So, think of HTML syntax NOT in terms of the elements (and tags) you have already seen, but in terms of patterns:

<pre class="code">&lt;tag&gt; 

&lt;tag&gt;some content&lt;/tag&gt;

&lt;tag attribute="value"&gt;

&lt;tag attribute-1="value" attribute-2="value"&gt;

...and any combination of the above!
</pre>

<p>There are lots of HTML elements, and you should not try to learn them all. As you construct more and more web pages, you will come to know more and more HTML elements, many of which you will eventually remember.  But there's no need to memorize them on purpose. There are many references available online. When you come across an element you don't know - look it up! 
<a href="https://developer.mozilla.org/en-US/docs/Web/HTML/Element">Here's an excellent resource</a>.

<h4 id="4">4. Structure of an HTML document</h4>
<p>An HTML document consists of 2 main parts: the head and the body:
<ul>
    <li>the <b>HEAD</b> contains information about the web page (not displayed by the browser)
    <li>the <b>BODY</b> contains the web page content (this is what your browser displays)
</ul>

<p><img src="3_resources/structure.png" alt="html element">


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

<h4 id="5">5. Debugging and validating your code</h4>

<p>Here's <a href="https://developer.mozilla.org/en-US/docs/Learn/HTML/Introduction_to_HTML/Debugging_HTML">a good set of guidelines on how to debug your HTML</a>.

<p>When using the <a href="https://validator.w3.org/">W3C HTML validator</a> do not be scared by many errors: usually fixing the first one takes care of most of the rest (a missed quotation mark can cause a lot of errors to "trickle down" the source code: adding the missed quote could fix them all!)

<p>Overall, pay attention to detail: you are writing "for a computer" - and computers only follow instructions. Miss a character, and the precise instruction will fall apart. So when you see a mess, look at your code and try to imagine how a computer would read that code - i.e., character by character. Where, do you think, it could have seen a character that confused it?

<p>Also, pay attention to syntax highlighting in your editor: you will immediately see when something is off.

<p>Try to spot the errors in these examples (the first one has no errors, the rest have ONE character missed or mistyped):

<ul>
    <li><a href="3_resources/noerror.html">no error</a>
    <li><a href="3_resources/error1.html">error 1</a>
    <li><a href="3_resources/error2.html">error 2</a>
    <li><a href="3_resources/error3.html">error 3</a>
    <li><a href="3_resources/error4.html">error 4</a>
</ul>

